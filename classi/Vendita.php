<?php 
require_once __DIR__ . '/Immobile.php';

class Vendita extends Immobile {
    public $prezzoDiVendita;

    public function __construct($nome, $prezzoDiVendita, $proprietario)
    {
        parent::__construct ($nome, $proprietario);
        $this->prezzoDiVendita = $prezzoDiVendita;
    }
}