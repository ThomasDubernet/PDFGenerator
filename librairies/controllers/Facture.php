<?php

namespace Controllers;

class Facture {
    
    protected $modelName = \Models\Facture::class;
    
    public function new(){
        $pageTitle = "Nouvelle Facture";
        \Renderer::render('dashboard/add-facture', compact('pageTitle'));
    }

    public function change(){
        
    }

    public function delete(){

    }
}