<?php 

require_once 'funcoes.php'; // require_once -> sem o 'funcoes.php' o arquivo dá fatal error.

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

/* SAQUES E DEPÓSITOS
$contasCorrentes["123.456.789-02"] = sacar($contasCorrentes["123.456.789-02"], 3000);
$contasCorrentes["123.456.789-00"] = sacar($contasCorrentes["123.456.789-00"], 2000);
$contasCorrentes["123.456.789-02"] = depositar($contasCorrentes["123.456.789-02"], 2000);
*/

unset($contasCorrentes["123.456.789-00"]); // remove

// titularComLetrasMaiusculas(conta: $contasCorrentes["123.456.789-01"]); -> função para mostrar o nome eme letra maiuscula

/* FOREACH UTILIZADO NO TERMINAL
 foreach($contasCorrentes as $cpf => $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta; //list()
    exibeMensagem(mensagem: "Titular: $titular");
    exibeMensagem(mensagem: "CPF: $cpf");
    exibeMensagem(mensagem: "Saldo: $saldo");
} */
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta){ ?>
        <dt>
            <h3><?= "Titular: {$conta['titular']}";?> - <?= "CPF: $cpf"; // <?= -> <?php echo?></h3> 
        </dt>
        <dd>
            <?= "Saldo: {$conta['saldo']}"; ?>
        </dd>
        <?php } ?>
    </dl>

</body>
</html>