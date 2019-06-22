<?php
//Uma das formas de iniciar o array
//$salario = array ()

$notas = [0, 3, 10 ,4];
//Sizeof retorna o tamanho do array
$tamanhoArray = sizeof($notas);

$mediaNotas = ($notas[0] + $notas[1] + $notas[2] + $notas[3]) / $tamanhoArray;

echo "Media do array $mediaNotas";
