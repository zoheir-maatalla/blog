<?php

namespace App\Models;

class Droits extends Model
{
    protected $table = 'droits';

     public function allDroits(): array
    {
        return $this->query("SELECT id, nom FROM {$this->table}");
    }
}