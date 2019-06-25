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

$outroArrayAssociativo = [
    "Anderson" => "320",
    "Pamela" => "320",
    "Anthony" => "430",

];

var_dump($outroArrayAssociativo);

foreach ($outroArrayAssociativo as $key => $value) {
    echo "O CPF do {$key} é {$value}".PHP_EOL;
}

//Array Associativo, quando usamos String como chave do array
$novoArray = array_combine($corretistas,$saldo);

if(array_key_exists("Andersson",$novoArray)){
    echo "O saldo é {$novoArray[Anderson]}".PHP_EOL;
}else{
    echo "Não existe essa pessoa";
}

//adicionando um indice no array
$novoArray["Anthony"] = 5000;

//var_dump($novoArray);