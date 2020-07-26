<?php

namespace Models;

class User extends Model {
    
    protected $table = "users";

    /**
     * Ajoute un utilisateur
     *
     * @param string $username
     * @param string $email
     * @param string $password
     * @return void
     */
    public function insert(string $username, string $email, string $password, string $adresse, int $zip, string $ville, int $siret): void{
        $query = $this->pdo->prepare('INSERT INTO users SET username = :username, email = :email, password = :password, adresse = :adresse, zip = :zip, ville = :ville, siret = :siret');
        $query->execute(compact('username', 'email', 'password', 'adresse', 'zip', 'ville', 'siret'));
    }

/**
 * vérifie que l'utilisateur existe
 *
 * @param string $username
 * @param string $password
 * @return array
 */
    public function verify(string $username, string $password): array{
        $query = $this->pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $user = $query->fetch();

        return $user;
    }
}