<?php 

    trait Coordinate {
        public $indirizzo;
        public $numeroCivico;
        public $comune;
        public $provincia;
        public $cap;
        public $nazione;

        public function getIndirizzoCompleto() {
            return $this->indirizzo . ' ' . $this->numeroCivico . ', ' . $this->comune . $this->cap . '- ' . $this->provincia;
        }
    }