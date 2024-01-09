<?php
// função
function sacar(array $conta, float $valorSacar): array
{
    if ($valorSacar > $conta['saldo']) {
        echo "Você não pode sacar este valor!";
    } else {
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorDeposito): array
{
    if ($valorDeposito <= 0) {
        echo "Informe um valor valido!";
    } else {
        $conta['saldo'] += $valorDeposito;
    }
    return $conta;
}

function titularLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}
?>