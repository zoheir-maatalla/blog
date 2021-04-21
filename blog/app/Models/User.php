<?php

namespace App\Models;

class User extends Model
{
    protected $table = 'utilisateurs';

    public function getByLogin(string $login)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE login = ?", [$login], true);
    }

    public function allUsers()
    {
        return $this->query("SELECT * FROM {$this->table}");
    }
}