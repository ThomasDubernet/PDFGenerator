<?php

namespace Models;

class Client extends Model {
    protected $table = "clients";

    /**
     * Trouver tous les clients d'un utilisateur
     *
     * @param integer $user_id
     * @return void
     */
    public function findAll(int $user_id){
        $query = $this->pdo->prepare("SELECT * FROM clients WHERE user_id = :user_id");
        $query->execute(['user_id' => $user_id]);
        $clients = $query->fetchAll();

        return $clients;
    }
    
    
    public function findByName(string $entreprise){
        $query = $this->pdo->prepare("SELECT * FROM clients WHERE entreprise = :entreprise");
        $query->execute(['entreprise' => $entreprise]);
        $client = $query->fetch();

        return $client;
    }

    /**
     * Ajoute un nouveau client
     *
     * @param string $nom
     * @param string $prenom
     * @param string $entreprise
     * @param string $email
     * @param string $telephone
     * @param string $adresse
     * @param string $zip
     * @param string $ville
     * @param integer $user_id
     * @return void
     */
    public function insert(string $nom, string $prenom, string $entreprise, string $email,string $telephone, string $adresse, string $zip, string $ville, int $user_id){
        $query = $this->pdo->prepare("INSERT INTO {$this->table} SET nom = :nom, prenom = :prenom, entreprise = :entreprise, email = :email, telephone = :telephone, adresse = :adresse, zip = :zip, ville = :ville, user_id = :user_id");
        $query->execute(compact('nom', 'prenom', 'entreprise', 'email', 'telephone', 'adresse', 'zip', 'ville', 'user_id'));
    }
}