<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    // Definir dados da conta
    private Titular $titular;
    protected float $saldo = 0;
    private static $numeroDeContas;


    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
     self::$numeroDeContas--;
    }

    public function getSaldo()
    {
        echo "<p>Saldo: {$this->saldo}</p>";
    }

    public function getTitular(){
        echo "<p>Nome: {$this->titular->getNome()}</p>";
        echo "<p>CPF: {$this->titular->getCpf()}</p>";
    }

    public function sacar(float $valorSacar) : void
    {
        $tarifaSaque = $valorSacar * $this->percentualTarifa();
        $valorSaque = $valorSacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "<p><b>Saldo indisponivel!</b></p>";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorDepositar)
    {
        if ($valorDepositar > 0) {
            $this->saldo += $valorDepositar;
            return;
        }

        echo "<p><b>Valor invalido!</b></p>";
    }



    public static function recuperarNumeroDeContas()
    {
        echo "Número de contas: " . self::$numeroDeContas;
    }

    abstract protected function percentualTarifa();
}
