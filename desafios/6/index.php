<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="../style.css">
</head>
<?php

$dividendo = $_GET['dividendo'] ?? 0;
$divisor = $_GET['divisor'] ?? 0;




?>

<body>
    <!-- Analisando uma divisão -->
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?php echo $dividendo ?>">
            <label for="">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?php echo $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
        <a href="../index.php">Voltar</a>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <table>
            <thead>
                <tr>
                    <th><?php echo $dividendo ?></th>
                    <th><?php echo $divisor ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                        if ($dividendo >= 0 && $divisor >= 0) {
                            $resto = $dividendo %$divisor;
                            echo number_format($resto, 0);
                        } else{
                            echo "Valor invalido, tento algo maior que 0";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($dividendo >= 0 && $divisor >= 0) {
                            $resultado = $dividendo / $divisor;
                            echo number_format($resultado, 0);
                        } else{
                            echo "Valor invalido, tento algo maior que 0";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
</body>

</html>