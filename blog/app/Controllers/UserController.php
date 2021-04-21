<?php

namespace App\Controllers;

use App\Models\Tag;
use App\Models\User;

class UserController extends Controller
{
    public function register()
    {
        $tags = new Tag($this->getDB());
        $tags = $tags->allTags();
        
        return $this->view('auth.inscription', compact('tags'));
    }

    public function registerPost()
    {
        if($_POST['password'] !== $_POST['passwordConfirm']){

            return header('Location: '.ROOT.'inscription');
        }
        unset($_POST['passwordConfirm']);
        $user = new User($this->getDB());
        $result = $user->getByLogin($_POST['login']);

        if($result){

            return header('Location: '.ROOT.'inscription');
        }
        $data = array_replace($_POST,['password' => password_hash($_POST['password'], PASSWORD_DEFAULT)]);
        $user->create($data);

        return header('Location: '.ROOT.'connexion');
    }
    
    public function login()
    {
        $tags = new Tag($this->getDB());
        $tags = $tags->allTags();
        
        return $this->view('auth.connexion', compact('tags'));
    }

    public function loginPost()
    {
        $user = (new User($this->getDB()))->getByLogin($_POST['login']);
        if(password_verify($_POST['password'], $user->password)){
            $_SESSION['id'] = $user->id;
            $_SESSION['login'] = $user->login;
            $_SESSION['password'] = $user->password;
            $_SESSION['email'] = $user->email;
            $_SESSION['auth'] = $user->id_droits;

            if($_SESSION['auth'] === '1337'){

                return header('Location: '.ROOT.'admin?success=true');
            }
            if($_SESSION['auth'] === '42'){

                return header('Location: '.ROOT.'articles?success=true');
            }

            return header('Location: '.ROOT.'articles?success=true');
        } 
        
        return header('Location: '.ROOT.'connexion');
    }

    public function editProfil(int $id)
    {
        $tags = new Tag($this->getDB());
        $tags = $tags->allTags();
        
        return $this->view('auth.profil', compact('tags'));
    }

    public function updateProfil(int $id)
    {
        $user = new User($this->getDB());
        $result = $user->update($id, $_POST);

        if($result){
            return header('Location: '.ROOT.'profil');
        }
    }

    public function logout()
    {
        session_destroy();

        return header('Location: '.ROOT.'connexion');
    }
}
