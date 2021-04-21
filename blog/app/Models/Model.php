<?php

namespace App\Models;

use Database\DBConnection;
use PDO;

abstract class Model
{
    protected $db;
    protected $table;

    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }

    public function findAll($premier = null, $parPage = null): array
    {
        return $this->query("SELECT * FROM {$this->table} ORDER BY date DESC LIMIT $premier, $parPage");
    }

    public function findById(int $id): Model
    {
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }

    public function create(array $data)
    {
        if($this->table === 'articles' ){
            $data['id_utilisateur'] = $_SESSION['id'];
        }
        if($this->table === 'utilisateurs'){
            $data['id_droits'] = '1';
        }
        if($this->table === 'commentaires'){
            $data['id_utilisateur'] = $_SESSION['id'];
        }
        
        $firstParenthesis = "";
        $secondParenthesis = "";
        $i = 1;

        foreach($data as $key => $value){
            $comma = $i === count($data) ? '' : ', ';
            $firstParenthesis .= "{$key}{$comma}";
            $secondParenthesis .= ":{$key}{$comma}";
            $i++;
        }

        return $this->query("INSERT INTO {$this->table} ($firstParenthesis) VALUES ($secondParenthesis)", $data);
    }

    public function update(int $id, array $data)
    {
        $sqlRequestPart = "";
        $i = 1;

        foreach($data as $key => $value)
        {
            $comma = $i === count($data) ? '' : ', ';
            $sqlRequestPart .= "{$key} = :{$key}{$comma}";
            $i++;
        }

        return $this->query("UPDATE {$this->table} SET {$sqlRequestPart} WHERE id = $id", $data);
    }

    public function destroy(int $id): bool
    {
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    }
    
    public function query(string $sql, array $param = null, bool $single = null)
    {
        $method = is_null($param) ? 'query' : 'prepare';
        if(
            strpos($sql, 'DELETE') === 0 
            || strpos($sql, 'UPDATE') === 0 
            || strpos($sql, 'INSERT') === 0){
            $stmt = $this->db->getPDO()->$method($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);

            return $stmt->execute($param);
        }

        $fetch = is_null($single) ? 'fetchAll' : 'fetch';

        $stmt = $this->db->getPDO()->$method($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);

        if($method === 'query'){
            return $stmt->$fetch();
        } else {
            $stmt->execute($param);
            return $stmt->$fetch();
        }
    }

    public function adminFindAll(): array
    {
        return $this->query("SELECT * FROM {$this->table} ORDER BY date DESC");
    }
}
