<?php

require_once __DIR__ . '/classi/Agente.php';
require_once __DIR__ . '/classi/Cliente.php';

require_once __DIR__ . '/classi/Vendita.php';
require_once __DIR__ . '/classi/Affitto.php';

$myAgente = new Agente('Mario','Rossi','mario@rossi.it','12345');
$myCLiente = new Cliente('Giorgio','Bianchi','giorgio@bianchi.it','12345');

$immobileInVendita = new Vendita('mansarda', 150000, $myCLiente);
$immobileInAffitto = new Affitto('monolocale',500, $myCLiente);

$myCLiente->indirizzo = 'Via Mazzini';
$myCLiente->numeroCivico = '1';
$myCLiente->cap = '64000';
$myCLiente->provincia = 'MI';
$myCLiente->nazione = 'IT';

echo $myCLiente->getUserInfo();