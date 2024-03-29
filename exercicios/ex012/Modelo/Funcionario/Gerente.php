<?php

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
public function calcularBonificacao() :float{
    return  $this->getSalario();
}

public function podeAutentiar(string $senha): bool{
    return $senha === '4321';
}
}
?>