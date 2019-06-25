<?php

$saldo = [
    1200,
    600,
    3000,
    2800,
];
/**
 * Percorrendo o saldo com o foreach
 */

foreach ($saldo as $varSaldo ) {
    echo "O Saldo é $varSaldo".PHP_EOL;
}
//Ordena o array
sort($saldo);


echo "o menor saldo é $saldo[0]";