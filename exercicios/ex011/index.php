<?php
require 'funcoes.php';

// arrei associativo
$contasCorrentes = [
    '563.456.865-45' => [
        'titular' => 'Isadora Mello',
        'saldo' => '1300'
    ],
    '132.456.865-46' => [
        'titular' => 'Thales Silva',
        'saldo' => '8000'
    ],
    '132.456.865-47' => [
        'titular' => 'Liz Torres',
        'saldo' => '300'
    ]
];

// sacar 
$contasCorrentes['563.456.865-45'] =  sacar($contasCorrentes['563.456.865-45'], 1300);
$contasCorrentes['563.456.865-45'] =  depositar($contasCorrentes['563.456.865-45'], 1000000);

// letras maiusculas
titularLetrasMaiusculas($contasCorrentes['563.456.865-45']);

// remover
unset($contasCorrentes['563.456.865-45']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - Banco</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Banco</h1>
    </header>
    <section>
        <ul>
            <?php
            foreach ($contasCorrentes as $cpf => $conta) {
                ['titular' => $titular, 'saldo' => $saldo] = $conta;
                echo "<li>CPF: $cpf {$conta['titular']} <br>SALDO: {$conta['saldo']}</li>";
            }
            ?>
        </ul>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </section>
</body>
</html>