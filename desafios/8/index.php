<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
$numero = $_GET['num'] ?? 0;

$raiz_quadrada = pow($numero, 2);
$raiz_cubica = pow($numero, 3);
?>
<body>
    <!--  -->
    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">Número</label>
            <input type="number" name="num" id="num" value="<?php echo $numero; ?>">
            <input type="submit" value="Calcular raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php
        echo "Analizando o <b>número $numero</b>, temos:<br>
        <ul>
        <li>A sua raiz qudrada é <b>$raiz_quadrada</b></li>
        <li>A sua raiz cubica é <b>$raiz_cubica</b></li>
        </ul>
        ";
        ?>

        <a href="../index.php">Voltar</a>
    </section>
</body>

</html>