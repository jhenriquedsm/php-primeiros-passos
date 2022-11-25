<?php 

function exibeMensagem($mensagem){
    echo $mensagem . '<br>'; 
}

function sacar(array $conta, float $valor) : array{
    if($valor > $conta['saldo']){
        exibeMensagem(mensagem:"Saldo insuficiente para este saque.");
    } else{
        $conta['saldo'] = $conta['saldo'] -= $valor;
        // exibeMensagem(mensagem: "Saque concluído!");
        // exibeMensagem(mensagem: "Saldo atual: " . $conta['saldo']);
    }
    return $conta;
}

function depositar(array $conta, float $valor) : array{
    if($valor > 0){
        $conta['saldo'] = $conta['saldo'] += $valor;
        // exibeMensagem(mensagem: "Depósito concluído!");
        // exibeMensagem(mensagem: "Saldo atual: " . $conta['saldo']);
    } else {
        exibeMensagem(mensagem: "Válor para depósito inválido");
    }

    return $conta;
}

function titularComLetrasMaiusculas(array &$conta){
   $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular | Saldo: $saldo</li>";
}