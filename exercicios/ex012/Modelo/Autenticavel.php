<?php
namespace Alura\Banco\Modelo;
interface Autenticavel{
    public function podeAutentiar(string $senha): bool;
}