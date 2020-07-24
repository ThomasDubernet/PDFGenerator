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
    public function insert(string $username, string $email, $password): void{
        $query = $this->pdo->prepare('INSERT INTO users SET username = :username, email = :email, password = :password');
        $query->execute(compact('username', 'email', 'password'));
    }

    public function verify(string $username, string $password): array{
        $query = $this->pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $user = $query->fetch();

        return $user;
    }
}