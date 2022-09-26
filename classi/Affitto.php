<?php 
require_once __DIR__ . '/Immobile.php';

class Affitto extends Immobile {
    public $canoneMensile;
    public $tipoContratto;

    public function __construct($nome, $canoneMensile, $proprietario)
    {
        parent::__construct ($nome, $proprietario);
        $this->canoneMensile = $canoneMensile;
    }
}