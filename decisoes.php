<?php

$idade = 17;
$acompanhado = true;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado." . PHP_EOL;

if($idade >= 18 ){
    echo "Você tem $idade anos. Você pode entrar!";
} elseif($idade >= 16 && $idade < 18 && $acompanhado == true){
    echo "Você tem $idade anos e está acompanhado. Pode entrar!";
}else {
    echo "Você só tem $idade anos! Somente maiores de 18 anos.";
}

echo PHP_EOL;
echo "Adeus, amigão!";