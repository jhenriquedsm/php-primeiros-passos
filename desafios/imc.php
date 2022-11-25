<?php

$peso = 65;
$altura = 1.77;
$imc = $peso / ($altura * $altura);
$imc = number_format($imc, 2, '.', '');

if($imc <= 18.5){
    echo "Seu imc é $imc\n";
    echo "Você está abaixo do peso!";
} elseif($imc >= 18.6 && $imc <= 24.9){
    echo "Seu imc é $imc\n";
    echo "Você está no peso ideal!";
} elseif($imc >= 25 && $imc <= 29.9){
    echo "Seu imc é $imc\n";
    echo "Você está levemente acima do peso!";
} elseif($imc >= 30 && $imc <= 34.9){
    echo "Seu imc é $imc\n";
    echo "Você está com Obesidade grau I!";
} elseif($imc >= 35 && $imc <= 39.9){
    echo "Seu imc é $imc\n";
    echo "Você está com Obesidade grau II (Severa)!";
} else {
    echo "Seu imc é $imc\n";
    echo "Você está com Obesidade grau III (Mórbida)!";
}