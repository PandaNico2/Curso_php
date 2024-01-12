<?php
require_once './autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, ContaPoupanca, ContaCorrente};
use Alura\Banco\Modelo\{Endereco, Cpf};
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Funcionario, Gerente, Diretor, EditorVideo};
use Alura\Banco\Service\Autentificador;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <h1>criando conta usando POO</h1>
    </header>
    <section>
        <?php
        
        echo "<h1>Criação de titulares</h1>";
        $endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
        $vinicius = new Titular(new Cpf('123.456.789-10'), 'Vinicius Dias', $endereco);
        $primeiraConta = new ContaCorrente($vinicius);
        $primeiraConta->depositar(500);
        $primeiraConta->sacar(300);

        echo $primeiraConta->getTitular();
        echo $primeiraConta->getSaldo();
        echo $endereco;

        // Excluir
        $outroEndereco = new Endereco('A', 'b', 'c', '1D');
        $outra = new ContaPoupanca(new Titular(new Cpf('123.654.789-01'), 'Abcdefg', $outroEndereco));
        unset($segundaConta);
        echo ContaPoupanca::recuperarNumeroDeContas();

        
        // bonificações de funcionarios
        echo "<h1>Bonificações de funcionarios</h1>";
        $editor = new EditorVideo('Paulo', new Cpf('199.428.679-16'), 1500);
        $desenvolvedor = new Desenvolvedor('Alexandre', new Cpf('100.428.679-16'), 1000);
        $gerente = new Gerente('Patricia', new Cpf('110.428.679-16'), 3000);
        $diretor = new Diretor('Renata', new Cpf('110.428.679-16'), 5000);
        // var_dump($desenvolvedor);

        $controlador = new ControladorDeBonificacoes;
        $controlador->adicionarBonificacoes($desenvolvedor);
        $controlador->adicionarBonificacoes($gerente);
        $controlador->adicionarBonificacoes($diretor);
        $controlador->adicionarBonificacoes($editor);

        echo "Total: {$controlador->getTotal()}";

        // Aumento
        echo "<h1>Aumento de salario</h1>";
        echo "<p>Salario inicial: " . $desenvolvedor->getSalario() . "<br></p>";
        $desenvolvedor->sobedeNivel();
        echo "<p>Salario novo: " . $desenvolvedor->getSalario() . "<br></p>";

        // Login
        echo "<h1>Login</h1>";
        $autenticador =  new Autentificador();
        $autenticador->tentarLogin($diretor, '1234');

        
        ?>


        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </section>
</body>

</html>