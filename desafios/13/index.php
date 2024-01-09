<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio </title>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
$valor = $_GET['valor'] ?? 0;
$val = $valor;

$duzentos = floor($val / 200);
$val %= 200;

$cem = floor($val / 100);
$val %= 100;

$cinquenta = floor($val / 50);
$val %= 50;

$vinte = floor($val / 20);
$val %= 20;

$dez = floor($val / 10);
$val %= 10;

$cinco = floor($val / 5);
$val %= 5;

$dois = floor($val / 2);
$val %= 2;
?>

<body>
    <header>
        <main>

            <h1>Caixa eletrônico</h1>
            <form action="" method="get">
                <label for="">Qual valor você deseja sacar? (R$)*</label>
                <input type="number" name="valor" id="valor" value="<?php echo number_format($valor, 2, ","); ?>" step="0.01">
                <p>*Notas disponiveis: R$100, R$50, $10 e $5</p>
                <input type="submit" value="Sacar">
            </form>
        </main>
    </header>
    <section>
        <h2>saque de <?php echo number_format($valor, 2, ","); ?> realizao</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <?php
            echo "
            <li>R$200 - $duzentos</li>
            <li>R$100 - $cem </li>
            <li>R$50 - $cinquenta</li>
            <li>R$20 - $vinte</li>
            <li>R$10 - $dez</li>
            <li>R$5 - $cinco</li>
            <li>R$2 - $dois</li>";
            ?>
        </ul>
        <a href="../index.php">Voltar</a>
    </section>
</body>

</html>