<?php

$contasCorrentes = [
    "123.456.789-00" => [
        'titular' => "José Henrique",
        'saldo' => 1000
    ],
    "123.456.789-01" => [
        'titular' => "José do Amparo",
        'saldo' => 10000
    ],
    "123.456.789-02" => [
        'titular' => "Catiane",
        'saldo' => 8000
    ]
];

$contasCorrentes["123.456.789-03"] = [
    'titular' => "Ana Luísa",
    'saldo' => 0
];

foreach($contasCorrentes as $cpf => $conta){
    echo "Titular: ";
    echo $conta['titular'] . PHP_EOL;
    echo "CPF: ";
    echo $cpf . PHP_EOL;
    echo "Saldo: ";
    echo $conta['saldo'] . PHP_EOL;
}