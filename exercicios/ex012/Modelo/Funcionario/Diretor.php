<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel{
    public function calcularBonificacao() :float{
        return  $this->getSalario() * 2;
    }
    public function podeAutentiar(string $senha): bool{
        return $senha === '1234';
    }
}
?>