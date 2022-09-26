<?php 
    require_once __DIR__ . '/User.php';

    class Agente extends User {
        public $provvigione;

        public function __construct($nome, $cognome, $email, $password, $telefono = null, $provvigione = 3)
        {
            parent::__construct($nome, $cognome, $email, $password, $telefono = null, $provvigione = 3);
            $this->provvigione = $provvigione;
        }
    }