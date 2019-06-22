<?php
//Uma das formas de iniciar o array
//$salario = array ()

$notas = [5, 3, 10 ,4];
//Sizeof retorna o tamanho do array
$tamanhoArray = sizeof($notas);
$soma = 0;

 for ($i=0; $i < $tamanhoArray; $i++) { 
     $soma = $soma + $notas[$i];
 }

 $mediaNotas = $soma /$tamanhoArray;


echo "Media do array $mediaNotas";
