<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa{
    private string $cargo;

    public function __construct(Cpf $cpf, string $nome, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function alteraNome(string $nome): void{
        $this->validaNome($nome);
        $this->nome = $nome;
    }
}
?>