<?php

namespace Controllers;

class Dashboard extends Controller {

    protected $user_id;
    
    public function __construct()
    {
        $this->user_id = $_GET['id'] | null;
    }

    public function index(){
        $clientModel = new \Models\Client();
        $clients = $clientModel->findAll($this->user_id);
        
        // $devisModel = new \Models\Devis();
        // $devis = $devisModel->findAll($this->user_id);
        
        // $factureModel = new \Models\Facture();
        // $factures = $factureModel->findAll($user_id);

        $pageTitle = "Panel";
        \Renderer::render('dashboard/index', compact('pageTitle', 'clients'));
    }
}