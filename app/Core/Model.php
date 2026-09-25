<?php
namespace App\Core;

abstract class Model
{
    protected string $table = '';
    protected string $primaryKey = 'id';

    public static function query(string $sql, array $params = []): \PDOStatement
    {
        return Database::query($sql, $params);
    }

    public static function all(string $orderBy = 'id DESC'): array
    {
        $instance = new static();
        $sql = "SELECT * FROM `{$instance->table}` ORDER BY {$orderBy}";
        return Database::fetchAll($sql);
    }

    public static function find($id): ?array
    {
        $instance = new static();
        $sql = "SELECT * FROM `{$instance->table}` WHERE `{$instance->primaryKey}` = :id LIMIT 1";
        return Database::fetchOne($sql, ['id' => $id]);
    }

    public static function findBy(string $column, $value): ?array
    {
        $instance = new static();
        $sql = "SELECT * FROM `{$instance->table}` WHERE `{$column}` = :val LIMIT 1";
        return Database::fetchOne($sql, ['val' => $value]);
    }

    public static function where(string $column, $value, string $operator = '='): array
    {
        $instance = new static();
        $sql = "SELECT * FROM `{$instance->table}` WHERE `{$column}` {$operator} :val";
        return Database::fetchAll($sql, ['val' => $value]);
    }

    public static function create(array $data): string
    {
        $instance = new static();
        $fields = array_keys($data);
        $columns = implode('`, `', $fields);
        $placeholders = ':' . implode(', :', $fields);

        $sql = "INSERT INTO `{$instance->table}` (`{$columns}`) VALUES ({$placeholders})";
        Database::query($sql, $data);
        return Database::lastInsertId();
    }

    public static function update($id, array $data): bool
    {
        $instance = new static();
        $setClauses = [];
        foreach ($data as $field => $val) {
            $setClauses[] = "`{$field}` = :{$field}";
        }
        $setString = implode(', ', $setClauses);
        $data['__id'] = $id;

        $sql = "UPDATE `{$instance->table}` SET {$setString} WHERE `{$instance->primaryKey}` = :__id";
        Database::query($sql, $data);
        return true;
    }

    public static function delete($id): bool
    {
        $instance = new static();
        $sql = "DELETE FROM `{$instance->table}` WHERE `{$instance->primaryKey}` = :id";
        Database::query($sql, ['id' => $id]);
        return true;
    }

    public static function count(string $whereSql = '1=1', array $params = []): int
    {
        $instance = new static();
        $sql = "SELECT COUNT(*) as total FROM `{$instance->table}` WHERE {$whereSql}";
        $res = Database::fetchOne($sql, $params);
        return (int)($res['total'] ?? 0);
    }

    public static function paginate(int $page = 1, int $perPage = 20, string $whereSql = '1=1', array $params = [], string $orderBy = 'id DESC'): array
    {
        $instance = new static();
        $total = self::count($whereSql, $params);
        $totalPages = (int)ceil($total / $perPage);
        $page = max(1, min($page, max(1, $totalPages)));
        $offset = ($page - 1) * $perPage;

        $sql = "SELECT * FROM `{$instance->table}` WHERE {$whereSql} ORDER BY {$orderBy} LIMIT {$perPage} OFFSET {$offset}";
        $records = Database::fetchAll($sql, $params);

        return [
            'data'         => $records,
            'current_page' => $page,
            'per_page'     => $perPage,
            'total'        => $total,
            'total_pages'  => $totalPages
        ];
    }
}
