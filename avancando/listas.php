<?php

$idades = [18, 48, 44, 13];

list($idadeJoseHenrique, $idadeJoseDoAmparo, $idadeCatiane) = $idades;

$idades[] = 11;
$quantidadeDeIdades = sizeof($idades);


foreach($idades as $idade){
    echo $idade . PHP_EOL;
}