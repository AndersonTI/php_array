<?php

$corretistas = [
    "Anderson",
    "Eduardo",
    "Ferreira",
];

$saldo = [
    3000,
    1000,
    2000,

];

//Junto os dois array(colocando o final)
//$novoArray = array_marge($corretistas,$saldo);

//Array Associativo, quando usamos String como chave do array
$novoArray = array_combine($corretistas,$saldo);
//Buscando o valor do indice Anderson
var_dump( $novoArray["Anderson"]);

//adicionando um indice no array
$novoArray["Anthony"] = 5000;

var_dump($novoArray);