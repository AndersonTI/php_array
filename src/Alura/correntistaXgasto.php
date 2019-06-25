<?php

require_once 'ArrayUtil.php';

$correntistaXcompras = [
    "Anderson",
    "Pedro",
    12,
    "Maria",
    25,
    "Jorge",
    "Lucas",
    "12"
];
echo "<pre>";
//var_dump($correntistaXcompras);

ArrayUtils::remover("Anderson",$correntistaXcompras);

var_dump($correntistaXcompras);

echo "</pre>";