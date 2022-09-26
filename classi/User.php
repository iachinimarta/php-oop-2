<?php

require_once __DIR__ . '/../trait/coordinate.php';
    class User {
        public $telefono;
        public $email;
        public $password;

        public $nome;
        public $cognome;

        public function __construct($nome, $cognome, $email, $password, $telefono = null)
        {
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->email = $email;
            $this->password = $password;
            $this->telefono = $telefono;
        }

        public function getUserInfo() {
            return $this->nome . ' ' . $this->cognome . ' ' . $this->telefono . ' ' . $this->email . '<br>';
        }

    }
?>