<?php

namespace App\Controllers\admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Droits;
use App\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $this->isAdmin();

        $post = new Post($this->getDB());
        $posts = $post->adminFindAll();
        $tags = new Tag($this->getDB());
        $tags = $tags->allTags();
        $user = new User($this->getDB());
        $users = $user->allUsers();

        return $this->view('admin.index', compact('posts', 'tags', 'users'));
    }

    public function create()
    {
        $this->isModerator();

        $tags = new Tag($this->getDB());
        $tags = $tags->allTags();
        
        return $this->view('admin.creer-article', compact('tags'));
    }

    public function createPost()
    {
        $this->isModerator();

        $post = new Post($this->getDB());
        $result = $post->create($_POST);
        
        if($result){
            return header('Location: '.ROOT.'articles');
        }
    }
    
    public function createCategorie()
    {
        $this->isAdmin();

        $tags = new Tag($this->getDB());
        $tags = $tags->allTags();
        
        return $this->view('admin.creer-categorie', compact('tags'));
    }

    public function createCategoriePost()
    {
        $this->isAdmin();

        $tags = new Tag($this->getDB());
        $result = $tags->create($_POST);
        
        if($result){
            return header('Location: '.ROOT.'admin');
        }
    }

    public function edit(int $id)
    {
        $this->isAdmin();
        
        $post = new Post($this->getDB());
        $post = $post->findById($id);
        $tags = new Tag($this->getDB());
        $tags = $tags->allTags();

        return $this->view('admin.modifier-article', compact('post', 'tags'));
    }

    
    public function editCategorie(int $id)
    {
        $this->isAdmin();
        
        $tag = new Tag($this->getDB());
        $tag = $tag->findById($id);
        $tags = new Tag($this->getDB());
        $tags = $tags->allTags();
        
        return $this->view('admin.modifier-categorie', compact('tag', 'tags'));
    }
    
    public function editUser(int $id)
    {
        $this->isAdmin();
        
        $user = new User($this->getDB());
        $user = $user->findById($id);
        $droits = new Droits($this->getDB());
        $droits = $droits->allDroits();
        $tags = new Tag($this->getDB());
        $tags = $tags->allTags();

        return $this->view('admin.modifier-user', compact('user', 'tags', 'droits'));
    }

    public function update(int $id)
    {
        $this->isAdmin();

        $post = new Post($this->getDB());
        $result = $post->update($id, $_POST);

        if($result){
            return header('Location: '.ROOT.'admin');
        }
    }

    public function updateCategorie(int $id)
    {
        $this->isAdmin();

        $tags = new Tag($this->getDB());
        $result = $tags->update($id, $_POST);

        if($result){
            return header('Location: '.ROOT.'admin');
        }
    }

    public function updateUser(int $id)
    {
        $this->isAdmin();

        $users = new User($this->getDB());
        $result = $users->update($id, $_POST);

        if($result){
            return header('Location: '.ROOT.'admin');
        }
    }

    public function destroy($id)
    {
        $this->isAdmin();

        $post = new Post($this->getDB());
        $result = $post->destroy($id);

        if($result){
            return header('Location: '.ROOT.'admin');
        }
    }

    public function destroyCategorie($id)
    {
        $this->isAdmin();

        $tags = new Tag($this->getDB());
        $result = $tags->destroy($id);

        if($result){
            return header('Location: '.ROOT.'admin');
        }
    }

    public function destroyUser($id)
    {
        $this->isAdmin();

        $user = new User($this->getDB());
        $result = $user->destroy($id);

        if($result){
            return header('Location: '.ROOT.'admin');
        }
    }
}
