<?php

$conta1 = [
    'titular' => "José Henrique",
    'saldo' => 1000
];
$conta2 = [
    'titular' => "José do Amparo",
    'saldo' => 10000
];
$conta3 = [
    'titular' => "Catiane",
    'saldo' => 8000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

echo "Titulares: " . PHP_EOL;
for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
