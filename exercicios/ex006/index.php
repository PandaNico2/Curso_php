<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicioo 6</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php
    // Capturando os dados do formulario retroalimentado
    $valor_1 = $_GET['v1'] ?? 0;
    $valor_2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?php echo $valor_1 ?>">
            <label for="">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?php echo $valor_2 ?>">
            <input type="submit" value="Somar">
        </form>
        <a href="../index.php"><button>Home</button></a>
    </main>
    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php
        $soma = $valor_1 + $valor_2;
        echo "<p>A soma entre os valores $valor_1 e $valor_2 é <b>igual a $soma</b></p>"
        ?>
    </section>

</body>

</html>