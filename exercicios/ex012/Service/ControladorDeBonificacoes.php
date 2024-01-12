<?php
namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, EditorVideo};

class ControladorDeBonificacoes{
private float $totalBonificacoes = 0;

public function adicionarBonificacoes(Funcionario $funcionario)
{
    $this->totalBonificacoes += $funcionario->calcularBonificacao();
}

public function getTotal():float{
    return $this->totalBonificacoes;
}
}
?>