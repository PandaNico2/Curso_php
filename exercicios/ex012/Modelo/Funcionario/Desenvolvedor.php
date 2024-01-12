<?php
namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario{

public function sobedeNivel(){
    $this->aumentoSalario($this->getSalario() * 0.75);
}

public function calcularBonificacao() :float{
    return  500;
}

}

?>