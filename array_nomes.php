<?php
$nomes = "Anderson,Pedro,Eduardo";

//precisa de delimitador e retorna um array
$arrayNome = explode(",",$nomes);

//Foreach Só intera sobre array
foreach ($arrayNome as $varnome){
    echo "Ola $varnome".PHP_EOL;
}
var_dump($arrayNome);

//Devolve um string com todos os nomes
$nomeJunto = implode(",", $arrayNome);

var_dump($nomeJunto);