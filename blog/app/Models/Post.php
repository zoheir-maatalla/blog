<?php

namespace App\Models;

use DateTime;

class Post extends Model
{
    protected $table = 'articles';

    public function getCreatedAt(): string
    {
        return (new DateTime($this->date))->format('d/m/Y à H:i');
    }

    public function getExcerpt(): string
    {
        return substr($this->articles, 0, 200) . '...';
    }

    public function getButton(): string
    {
        return <<<HTML
        <a href="articles/$this->id" class="btn btn-primary">Lire l'article</a>
    HTML;
    }

    public function getTags()
    {   
        return $this->query("
            SELECT * FROM categories 
            INNER JOIN articles 
            ON categories.id = articles.id_categorie 
            WHERE articles.id = ?"
        , [$this->id]);
    }

    public function findbyThree(): array
    {
        return $this->query("SELECT * FROM {$this->table} ORDER BY date DESC LIMIT 3");
    }

    public function countArticle()
    {
        return $this->query("SELECT COUNT(id) AS nb_article FROM {$this->table}", null, true);
    }

    public function getComments()
    {
        return $this->query("
            SELECT commentaires.commentaire, commentaires.date, utilisateurs.login FROM commentaires 
            INNER JOIN articles
            ON articles.id = commentaires.id_article
            INNER JOIN utilisateurs
            ON utilisateurs.id = commentaires.id_utilisateur
            WHERE articles.id = ?
            ORDER BY commentaires.date DESC"
        , [$this->id]);
    }
}
