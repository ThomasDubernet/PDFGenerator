<?php

namespace Models;

abstract class Model {
    protected $pdo;
    protected $table;

    public function __construct()
    {
        $this->pdo = \Database::getPDO();
    }
}