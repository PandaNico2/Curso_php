<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, Cpf};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
      
        $this->salario = $salario;
    }

    public function getSalario()
    {
        return $this->salario;
    }
    
    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function aumentoSalario(float $valorAuemento){
        if($valorAuemento < 0){
            echo "Aumenro deve ser positivo";
            return;
        }
        
        $this->salario += $valorAuemento;

    }

    abstract public function calcularBonificacao() :float;
}
