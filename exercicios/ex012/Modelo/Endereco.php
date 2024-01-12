<?php

namespace Alura\Banco\Modelo;

final class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function __toString()
    {
        return "<p>Endereço: {$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}</p>";
    }

    public function __get($nomeAtriubo)
    {
        $metodo = 'get' . ucfirst($nomeAtriubo);
        return $this->$metodo();
    }

}
