<?php 
    require_once __DIR__ . '/User.php';

    class Cliente extends User {
        public $noteInterne = null;

        public function __construct($nome, $cognome, $email, $password, $telefono = null, $noteInterne = null)
        {
            parent::__construct($nome, $cognome, $email, $password, $telefono);
            $this->noteInterne = $noteInterne;
        }
    }
?>