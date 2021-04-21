<?php

namespace App\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class BlogController extends Controller
{
    public function accueil()
    {
        $post = new Post($this->getDB());
        $posts = $post->findByThree();
        $tags = new Tag($this->getDB());
        $tags = $tags->allTags();

        return $this->view('blog.accueil', compact('posts', 'tags'));
    }

    public function index()
    {
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) $_GET['page'];
        } else {
            $currentPage = 1;
        }

        $nbArticles = new Post($this->getDB());
        $nbArticles = (int)$nbArticles->countArticle()->nb_article;
        $parPage = 5;
        $pages = (int) ceil($nbArticles / $parPage);
        $premier = ($currentPage * $parPage) - $parPage;

        $post = new Post($this->getDB());
        $posts = $post->findAll($premier, $parPage);
        $tags = new Tag($this->getDB());
        $tags = $tags->allTags();

        return $this->view('blog.index', compact('posts', 'tags', 'currentPage', 'pages'));
    }

    public function show(int $id)
    {
        $post = new Post($this->getDB());
        $post = $post->findById($id);
        $tags = new Tag($this->getDB());
        $tags = $tags->allTags();

        return $this->view('blog.show', compact('post', 'tags'));
    }

    public function showPost()
    {
        if(isset($_SESSION['auth'])){
            $id = preg_replace('#articles/#', '', $_GET['url']);
            $data = $_POST;
            $data['id_article'] = $id;
            $data['id_utilisateur'] = $_SESSION['id'];
            $comment = new Comment($this->getDB());
            $comment->create($data);

            return header('Location: '.ROOT.'articles/'.$id);
        } 
    }

    public function registerPost()
    {
        if($_POST['password'] !== $_POST['passwordConfirm']){

            return header('Location: '.ROOT.'inscription');
        }
        $user = new User($this->getDB());
        $result = $user->getByLogin($_POST['login']);

        if($result){

            return header('Location: '.ROOT.'inscription');
        }
        $data = array_replace($_POST,['password' => password_hash($_POST['password'], PASSWORD_DEFAULT)]);
        $user->create($data);

        return header('Location: '.ROOT.'connexion');
    }

    public function tag(int $id)
    {
        $tag = new Tag($this->getDB());
        $tag = $tag->findById($id);
        $tags = new Tag($this->getDB());
        $tags = $tags->allTags();

        return $this->view('blog.categorie', compact('tag', 'tags'));
    }
}
