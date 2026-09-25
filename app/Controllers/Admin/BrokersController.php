<?php
namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Core\Session;
use App\Core\Database;
use App\Models\Broker;
use App\Models\AdminLog;

class BrokersController extends Controller
{
    public function index(Request $request)
    {
        $brokers = Broker::allWithStats();
        
        $totalBrokers = count($brokers);
        $totalClientsEnrolled = array_sum(array_column($brokers, 'total_clients_count'));
        $totalCommissionsDistributed = array_sum(array_column($brokers, 'total_earned_inr'));
        $totalPendingBalance = array_sum(array_column($brokers, 'balance_due_inr'));

        $this->view('admin/brokers/index', [
            'page_title'                  => 'Vivah Sahayak & Marriage Bureau Network',
            'brokers'                     => $brokers,
            'totalBrokers'                => $totalBrokers,
            'totalClientsEnrolled'        => $totalClientsEnrolled,
            'totalCommissionsDistributed' => $totalCommissionsDistributed,
            'totalPendingBalance'         => $totalPendingBalance
        ]);
    }

    public function add(Request $request)
    {
        $this->view('admin/brokers/add', [
            'page_title' => 'Register Marriage Bureau / Matrimonial Agent'
        ]);
    }

    public function create(Request $request)
    {
        $name = trim($request->post('name', ''));
        $agency = trim($request->post('agency_name', ''));
        $phone = trim($request->post('phone', ''));
        $email = trim($request->post('email', ''));
        $city = trim($request->post('city', ''));
        $state = trim($request->post('state', ''));
        $commissionRate = (float)$request->post('commission_rate_percent', 15.0);
        $upiId = trim($request->post('payout_upi_id', ''));
        $bankAcc = trim($request->post('bank_account_number', ''));
        $bankIfsc = trim($request->post('bank_ifsc', ''));
        $notes = trim($request->post('notes', ''));

        if (empty($name) || empty($phone)) {
            $this->flash('error', 'Agent Name and Phone number are required.');
            Response::redirect('/admin/brokers/add');
        }

        // Generate Broker Code
        $lastBroker = Database::fetchOne("SELECT id FROM `brokers` ORDER BY id DESC LIMIT 1");
        $brokerCode = 'BRK' . str_pad((string)(($lastBroker['id'] ?? 0) + 1001), 4, '0', STR_PAD_LEFT);

        Database::query("INSERT INTO `brokers` 
            (`broker_code`, `name`, `agency_name`, `phone`, `email`, `city`, `state`, `commission_rate_percent`, `payout_upi_id`, `bank_account_number`, `bank_ifsc`, `notes`, `status`)
            VALUES (:code, :name, :agency, :phone, :email, :city, :state, :comm, :upi, :bacc, :ifsc, :notes, 'active')", [
            'code'   => $brokerCode,
            'name'   => $name,
            'agency' => $agency,
            'phone'  => $phone,
            'email'  => $email,
            'city'   => $city,
            'state'  => $state,
            'comm'   => $commissionRate,
            'upi'    => $upiId,
            'bacc'   => $bankAcc,
            'ifsc'   => $bankIfsc,
            'notes'  => $notes
        ]);

        $newId = Database::lastInsertId();
        $admin = Session::getAdmin();
        AdminLog::log($admin['id'] ?? 1, 'CREATE_BROKER', 'brokers', (int)$newId, ['broker_code' => $brokerCode, 'name' => $name]);

        $this->flash('success', "Marriage Bureau / Broker [{$name} ({$brokerCode})] registered successfully!");
        Response::redirect('/admin/brokers/view/' . $newId);
    }

    public function show(Request $request)
    {
        $id = (int)$request->param('id');
        $broker = Broker::findWithDetails($id);

        if (!$broker) {
            $this->flash('error', 'Broker profile not found.');
            Response::redirect('/admin/brokers');
        }

        $clients = Broker::getClients($id);
        $contributions = Broker::getContributions($id);

        $this->view('admin/brokers/view', [
            'page_title'    => "Agent Dossier: {$broker['name']} ({$broker['broker_code']})",
            'broker'        => $broker,
            'clients'       => $clients,
            'contributions' => $contributions
        ]);
    }

    public function payout(Request $request)
    {
        $id = (int)$request->param('id');
        $broker = Broker::findWithDetails($id);

        if (!$broker) {
            $this->flash('error', 'Broker not found.');
            Response::redirect('/admin/brokers');
        }

        $amount = (float)$request->post('amount_inr', 0);
        $method = $request->post('payment_method', 'upi');
        $txRef = trim($request->post('transaction_ref', ''));
        $notes = trim($request->post('notes', ''));

        if ($amount <= 0) {
            $this->flash('error', 'Please specify a valid payout amount.');
            Response::redirect('/admin/brokers/view/' . $id);
        }

        Database::query("INSERT INTO `broker_contributions` 
            (`broker_id`, `contribution_type`, `amount_inr`, `payout_status`, `payment_method`, `transaction_ref`, `notes`)
            VALUES (:bid, 'direct_payout', :amt, 'paid', :pm, :tx, :notes)", [
            'bid'   => $id,
            'amt'   => $amount,
            'pm'    => $method,
            'tx'    => $txRef,
            'notes' => $notes ?: 'Commission contribution payout'
        ]);

        Database::query("UPDATE `brokers` 
            SET `total_earned_inr` = `total_earned_inr` + :amt,
                `balance_due_inr` = GREATEST(0, `balance_due_inr` - :amt)
            WHERE `id` = :bid", [
            'amt' => $amount,
            'bid' => $id
        ]);

        $admin = Session::getAdmin();
        AdminLog::log($admin['id'] ?? 1, 'BROKER_PAYOUT', 'brokers', $id, [
            'amount_inr' => $amount,
            'method'     => $method,
            'ref'        => $txRef
        ]);

        $this->flash('success', "✅ Successfully recorded payout of " . format_inr($amount) . " to {$broker['name']}!");
        Response::redirect('/admin/brokers/view/' . $id);
    }
}
