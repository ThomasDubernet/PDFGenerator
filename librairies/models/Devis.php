<?php

namespace Models;

class Devis extends Model {
    protected $table = "devis";

    /**
     * Trouver tous les devis d'un utilisateur
     *
     * @param integer $user_id
     * @return void
     */
    public function findAll(int $user_id){
        $query = $this->pdo->prepare("SELECT * FROM devis WHERE user_id = :user_id");
        $query->execute(['user_id' => $user_id]);
        $devis = $query->fetchAll();

        return $devis;
    }

    /**
     * Ajoute un devis
     *
     * @param integer $user_id
     * @param string $devis_name
     * @param string $user_infos
     * @param integer $client_id
     * @param string $client_infos
     * @param string $taches
     * @return void
     */
    public function insert(int $user_id,string $devis_name, string $user_infos, int $client_id, string $client_infos, string $taches){
        $query = $this->pdo->prepare("INSERT INTO {$this->table} SET user_id = :user_id, devis_name = :devis_name, user_infos = :user_infos, client_id = :client_id, client_infos = :client_infos, taches = :taches");
        $query->execute(compact('user_id', 'devis_name', 'user_infos', 'client_id', 'client_infos', 'taches'));
    }
}