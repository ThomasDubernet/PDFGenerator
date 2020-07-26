<?php

namespace Models;

abstract class Model {
    protected $pdo;
    protected $table;

    public function __construct()
    {
        $this->pdo = \Database::getPDO();
    }

    /**
     * Retourne un item
     *
     * @param integer $id
     * @return void
     */
    public function find(int $id) {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");

        $query->execute(['id' => $id]);
        
        $item = $query->fetch();

        return $item;
    }
    
    /**
     * Supprime un item
     *
     * @param integer $id
     * @return void
     */
    function delete(int $id): void {
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
    }
}