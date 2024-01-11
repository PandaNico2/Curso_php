<?php
require_once './autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Conta\ContaCorrente;

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
        // $endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
        // $vinicius = new Titular(new Cpf('123.456.789-10'), 'Vinicius Dias', $endereco);
        // $primeiraConta = new Conta($vinicius);
        // $primeiraConta->depositar(500);
        // $primeiraConta->sacar(300);

        // echo $primeiraConta->getTitular();
        // echo $primeiraConta->getSaldo();
        // echo "<br>";

        // $patricia = new Titular(new Cpf('698.549.548-10'), 'Patricia', $endereco);
        // $segundaConta = new Conta($patricia);
        // var_dump($segundaConta);

        // echo $segundaConta->getTitular();
        // echo $segundaConta->getSaldo();
        // echo "<br>";

        // $umFuncionario = new Funcionario(new Cpf('100.428.679-16'), 'Isadora', 'desenvolvedora');
        // var_dump($umFuncionario);

        // excluir
        // $outroEndereco = new Endereco('A', 'b', 'c', '1D');
        // $outra = new Conta(new Titular(new Cpf('123.654.789-01'), 'Abcdefg', $outroEndereco));
        // unset($segundaConta);
        // echo Conta::recuperarNumeroDeContas();

        $conta = new ContaPoupanca(
            new Titular(
                new Cpf('10042867916'),
                'Isadora de Mello',
                new Endereco('Brusque', 'Cedrinho', 'Rua Pão de queijo', '316D')
            )
        );

        $conta->depositar(500);
        $conta->sacar(100);
        echo $conta->getSaldo();
        ?>

        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </section>
</body>
</html>