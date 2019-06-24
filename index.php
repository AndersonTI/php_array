<?php
require_once 'calculadora.php';

//Uma das formas de iniciar o array
//$salario = array ()
$notas = [5, 3, 10 ,4];

//Criando uma instancia de calculadora
$myCalc = new calculadora();

//Chamando o metodo calculaMedia passando notas
$myCalc->caculaMedia($notas);

