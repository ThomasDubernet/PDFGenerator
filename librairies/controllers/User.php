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
     * Deconnexion + retour à l'acceuil
     *
     * @return void
     */
    public function logout(){
        $pageTitle = "Accueil";
        $destroy = true;
        \Renderer::render("index", compact('pageTitle', 'destroy'));
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
        
        $adresse = null;
        if(!empty($_POST['adresse'])){
            $adresse = $_POST['adresse'];
        }
        
        $zip = null;
        if(!empty($_POST['zip'])){
            $zip = $_POST['zip'];
        }
        
        $ville = null;
        if(!empty($_POST['ville'])){
            $ville = $_POST['ville'];
        }
        
        $siret = null;
        if(!empty($_POST['siret'])){
            $siret = $_POST['siret'];
        }
        
        $site = null;
        if(!empty($_POST['site'])){
            $site = $_POST['site'];
        }
        
        $number = null;
        if(!empty($_POST['number'])){
            $number = $_POST['number'];
        }
        
        $social = null;
        if(!empty($_POST['social'])){
            $social = $_POST['social'];
        }

        $this->model->insert($username, $email, $password, $adresse, $zip, $ville, $siret, $site, $number, $social);

        \Http::redirect("index.php?controller=user&task=login");
    }

    public function verify(){
        $username = null;
        if(!empty($_POST['username'])){
            $username = $_POST['username'];
        }
        
        $password = null;
        if(!empty($_POST['password'])){
            $password = $_POST['password'];
        }

        $user = $this->model->verify($username, $password);
        $id = $user['id'];


        $pageTitle = "Dashboard";
        $connect = true;
        \Session::startWithID($user);
        \Http::redirect("index.php?controller=dashboard&task=index&id=" . $id);
    }

}