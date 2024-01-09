<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
$salario = $_GET['salario'] ?? 0;
$salario_minimo = 1380;

if($salario <= 0){
    $num_salario_minimo = $salario / $salario_minimo;   
    $resto = $salario - (number_format($num_salario_minimo, 0) * $salario_minimo);
}
?>

<body>
    <!-- Salário Mínimo -->
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">salario (R$)</label>
            <input type="number" name="salario" id="salario" step="0,01" value="<?php echo $salario ?>">
            <p>Considerando o salário mínimo de R$1.380,00</p>
            <input type="submit" value="Calcular">
        </form>

        <a href="../index.php">Voltar</a>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php
        echo "Quem recebeu um salário de R$ $salario, equivale á <b>" . number_format($num_salario_minimo, 0) . " salários minimos</b> + R$" . number_format($resto, 2, ", ");
        ?>
    </section>
</body>

</html>