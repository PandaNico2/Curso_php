<?php

namespace Alura\Banco\Modelo;

final class Cpf{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    
    public function getCpf(){
        return $this->cpf;
    }
}
?>