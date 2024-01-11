<?php
namespace Alura\Banco\Modelo\Conta;
class ContaCorrente extends Conta{
protected function percentualTarifa()
{
    return 0.05;
}

public function transferir(float $valorTraferir, Conta $contaDestino)
{
    if ($valorTraferir > $this->saldo) {
        echo "<p><b>Saldo indisponível<b></p><br>";
        return;
    }

    $this->sacar($valorTraferir);
    $contaDestino->depositar($valorTraferir);
}

}

?>