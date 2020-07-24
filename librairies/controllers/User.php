<?php

namespace Controllers;

class User extends Controller {
    protected $modelName = \Models\User::class;

    public function test() {
        var_dump($this->model);
    }

    /**
     * Accueil du site
     *
     * @return void
     */
    public function index(){
        $pageTitle = "Accueil";
        \Renderer::render("index", compact('pageTitle'));
    }

    /**
     * Page d'inscription
     *
     * @return void
     */
    public function sign(){
        $pageTitle = "Inscription";
        \Renderer::render("sign", compact('pageTitle'));
    }
    
    /**
     * Page de connexion
     *
     * @return void
     */
    public function login(){
        $pageTitle = "Connexion";
        \Renderer::render("connect", compact('pageTitle'));
    }

    /**
     * Ajoute un utilisateur à la BDD
     *
     * @return void
     */
    public function insert(){
        $username = null;
        if(!empty($_POST['username'])){
            $username = $_POST['username'];
        }
        
        $email = null;
        if(!empty($_POST['email'])){
            $email = $_POST['email'];
        }
        
        $password = null;
        if(!empty($_POST['password'])){
            $password = $_POST['password'];
        }

        $this->model->insert($username, $email, $password);

        \Http::redirect("index.php?controller=user&task=login");
    }

    public function verify(){
        $pageTitle = "Dashboard";

        $username = null;
        if(!empty($_POST['username'])){
            $username = $_POST['username'];
        }
        
        $password = null;
        if(!empty($_POST['password'])){
            $password = $_POST['password'];
        }

        
        $user = serialize($this->model->verify($username, $password));
        // var_dump($user);

        // \Http::redirect("index.php?controller=user&task=dashboard");
        $pageTitle = "Dashboard";
        \Renderer::render("dashboard/index", compact('pageTitle', 'user'));
    }

    // public function dashboard(){
    //     $pageTitle = "Dashboard";
    //     \Renderer::render("dashboard/index", compact('pageTitle'));
    // }
}