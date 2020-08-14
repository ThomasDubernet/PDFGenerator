<?php

namespace Controllers;

class Devis extends Controller{
    protected $modelName = \Models\Devis::class;
    
    public function new(){
        $clientModel = new \Models\Client();
        $pageTitle = "Nouveau Devis";

        if(isset($_GET['client_id'])){

            $client_id = $_GET['client_id'];
            $client = $clientModel->find($client_id);

            \Renderer::render('dashboard/add-devis', compact('pageTitle', 'client'));
        }
        elseif(isset($_GET['user_id'])){
            
            $user_id = $_GET['user_id'];
            $clients = $clientModel->findAll($user_id);

            \Renderer::render('dashboard/add-devis', compact('pageTitle', 'clients'));
        }
    }

    public function insert(){

        $tachesArray = array();

        foreach($_POST as $name_post => $element) { 
            if(strpos($name_post, "task") !== false){
                array_push($tachesArray, $element);
            }
        }
        $taches = serialize($tachesArray);

        
        $user_id = $_POST['user_id'];
        $userModel = new \Models\User();
        $user = $userModel->find(intval($user_id));
        $user_infos = serialize($user);
        
        $client_id = null;
        if(!empty($_POST['client_id'])){
            $clientModel = new \Models\Client();
            $client = $clientModel->find(intval($client_id));
        }
        elseif (!empty($_POST['client_entreprise'])){ 
            $clientModel = new \Models\Client();
            $client = $clientModel->findByName($_POST['client_entreprise']);
        }

        $client_id = $client['id'];
        $client_infos = serialize($client);

        $devis_name = $client['entreprise'] . str_replace('/', '', date('d/m/y'));

        

        // $this->model->insert($user_id, $devis_name, $user_infos, $client_id, $client_infos, $taches);

        $pageTitle = 'Visualisation du devis';

        \Renderer::render("dashboard/show-devis", compact('pageTitle', 'user_infos', 'devis_name', 'client_infos', 'taches' ));
    }

    public function show(){
        
    }

    public function delete(){

    }
}