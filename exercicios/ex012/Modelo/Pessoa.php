<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->nome = $nome;
        $this->validaNome($nome);
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    protected function validaNome(string $nome)
    {
        if (strlen($this->nome) < 5) {
            echo "Nome precisa de pelo menos 5 caracteres!";
            exit;
        }
    }
}
