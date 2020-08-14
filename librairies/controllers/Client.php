<?php

namespace Controllers;

class Client extends Controller {
    protected $modelName = \Models\Client::class;

    /**
     * Ajoute un client
     *
     * @return void
     */
    public function add(){
        $pageTitle ="Ajouter un client";
        \Renderer::render('dashboard/add-client', compact('pageTitle'));
    }

    public function insert(){

        $nom = null;
        if(!empty($_POST['nom'])){
            $nom = $_POST['nom'];
        }

        $prenom = null;
        if(!empty($_POST['prenom'])){
            $prenom = $_POST['prenom'];
        }

        $entreprise = null;
        if(!empty($_POST['entreprise'])){
            $entreprise = $_POST['entreprise'];
        }

        $email = null;
        if(!empty($_POST['email'])){
            $email = $_POST['email'];
        }

        $telephone = null;
        if(!empty($_POST['telephone'])){
            $telephone = $_POST['telephone'];
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

        $user_id = null;
        if(!empty($_POST['user_id'])){
            $user_id = $_POST['user_id'];
        }
        $this->model->insert($nom, $prenom, $entreprise, $email, $telephone, $adresse, $zip, $ville, $user_id);

        $clients = $this->model->findAll($user_id);

        $pageTitle = 'Dashboard';

        \Renderer::render("dashboard/index", compact('pageTitle', 'clients'));
    }

    public function delete(){
        if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
            die("Ho ! Fallait préciser le paramètre id en GET !");
        }
        if (empty($_GET['user_id']) || !ctype_digit($_GET['user_id'])) {
            die("Ho ! Fallait préciser le paramètre user_id en GET !");
        }
        $id = $_GET['id'];
        $user_id = $_GET['user_id'];

        $client = $this->model->find($id);
        if (!$client) {
            die("Aucun client n'a l'identifiant $id !");
        }

        $this->model->delete($id);

        $clients = $this->model->findAll(intval($user_id));

        $pageTitle = 'Dashboard';

        \Renderer::render("dashboard/index", compact('pageTitle', 'clients'));

    }

    public function show(){

        $client_id = null;
        if (empty($_GET['client_id']) || !ctype_digit($_GET['client_id'])) {
            die("Ho ! Fallait préciser le paramètre id en GET !");
        }
        $client_id = $_GET['client_id'];

        if (!$client_id) {
            die("Vous devez préciser un paramètre `id` dans l'URL !");
        }

        $client = $this->model->find($client_id);

        $pageTitle = $client['entreprise'];

        \Renderer::render('dashboard/show-client', compact('pageTitle', 'client'));
    }
}