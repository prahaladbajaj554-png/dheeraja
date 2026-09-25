<?php
namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Core\Session;
use App\Core\Database;
use App\Models\WhatsAppCommunity;
use App\Models\AdminLog;

class CommunitiesController extends Controller
{
    public function index(Request $request)
    {
        $communities = Database::fetchAll("SELECT * FROM `whatsapp_communities` ORDER BY `id` DESC");

        $this->view('admin/communities/index', [
            'page_title'  => 'Matrimony WhatsApp Communities',
            'communities' => $communities
        ]);
    }

    public function add(Request $request)
    {
        $this->view('admin/communities/add', [
            'page_title' => 'Add Matrimony WhatsApp Group / Community'
        ]);
    }

    public function create(Request $request)
    {
        $title = trim($request->post('title', ''));
        $caste = trim($request->post('caste_group', 'All Communities'));
        $region = trim($request->post('region', 'All India'));
        $url = trim($request->post('whatsapp_url', ''));
        $members = (int)$request->post('member_count', 150);
        $desc = trim($request->post('description', ''));

        if (empty($title) || empty($url)) {
            $this->flash('error', 'Group title and WhatsApp invite link are required.');
            Response::redirect('/admin/communities/add');
        }

        Database::query("INSERT INTO `whatsapp_communities` (`title`, `caste_group`, `region`, `whatsapp_url`, `member_count`, `description`, `is_active`) 
                        VALUES (:title, :caste, :region, :url, :members, :desc, 1)", [
            'title'   => $title,
            'caste'   => $caste,
            'region'  => $region,
            'url'     => $url,
            'members' => $members,
            'desc'    => $desc
        ]);

        $admin = Session::getAdmin();
        AdminLog::log($admin['id'] ?? 1, 'CREATE_WHATSAPP_COMMUNITY', 'whatsapp_communities', Database::lastInsertId(), [
            'title' => $title
        ]);

        $this->flash('success', "WhatsApp Community [{$title}] published successfully.");
        Response::redirect('/admin/communities');
    }

    public function edit(Request $request)
    {
        $id = (int)$request->param('id');
        $community = WhatsAppCommunity::find($id);

        if (!$community) {
            $this->flash('error', 'WhatsApp Community not found.');
            Response::redirect('/admin/communities');
        }

        $this->view('admin/communities/edit', [
            'page_title' => "Edit Community: {$community['title']}",
            'community'  => $community
        ]);
    }

    public function update(Request $request)
    {
        $id = (int)$request->param('id');
        $community = WhatsAppCommunity::find($id);

        if (!$community) {
            $this->flash('error', 'Community not found.');
            Response::redirect('/admin/communities');
        }

        Database::query("UPDATE `whatsapp_communities` SET 
            `title` = :t, 
            `caste_group` = :cg, 
            `region` = :r, 
            `whatsapp_url` = :url, 
            `member_count` = :m, 
            `description` = :d, 
            `is_active` = :act 
            WHERE `id` = :id", [
            't'   => trim($request->post('title', $community['title'])),
            'cg'  => trim($request->post('caste_group', $community['caste_group'])),
            'r'   => trim($request->post('region', $community['region'])),
            'url' => trim($request->post('whatsapp_url', $community['whatsapp_url'])),
            'm'   => (int)$request->post('member_count', $community['member_count']),
            'd'   => trim($request->post('description', $community['description'])),
            'act' => (int)$request->post('is_active', 1),
            'id'  => $id
        ]);

        $admin = Session::getAdmin();
        AdminLog::log($admin['id'] ?? 1, 'UPDATE_WHATSAPP_COMMUNITY', 'whatsapp_communities', $id, [
            'title' => $community['title']
        ]);

        $this->flash('success', "Community details updated.");
        Response::redirect('/admin/communities');
    }

    public function delete(Request $request)
    {
        $id = (int)$request->param('id');
        WhatsAppCommunity::delete($id);

        $admin = Session::getAdmin();
        AdminLog::log($admin['id'] ?? 1, 'DELETE_WHATSAPP_COMMUNITY', 'whatsapp_communities', $id);

        $this->flash('success', "Community deleted from app.");
        Response::redirect('/admin/communities');
    }
}
