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

    public function change(){
        
    }

    public function delete(){

    }
}