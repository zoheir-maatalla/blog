<?php

namespace App\Models;

class Tag extends Model
{
    protected $table = 'categories';

    public function getPosts()
    {
        return $this->query("
            SELECT articles.id, articles, id_categorie, categories.nom FROM articles 
            INNER JOIN categories 
            ON articles.id_categorie = categories.id 
            WHERE categories.id = ?
            ORDER BY articles.date DESC"
        , [$this->id]);
    }

     public function allTags(): array
    {
        return $this->query("SELECT * FROM categories");
    }
}