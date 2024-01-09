<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio </title>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
$segundos_inciais = $_GET['segundos'] ?? 0;
$segundos = $segundos_inciais;
$semanaSegundos = 7 * 24 * 60 * 60;
$diaSegundos = 24 * 60 * 60;
$horaSegundos = 60 * 60;
$minutoSegundos = 60;

// Calcula o número de semanas
$semanas = floor($segundos / $semanaSegundos);
$segundos %= $semanaSegundos;

// Calcula o número de dias
$dias = floor($segundos / $diaSegundos);
$segundos %= $diaSegundos;

// Calcula o número de horas
$horas = floor($segundos / $horaSegundos);
$segundos %= $horaSegundos;

// Calcula o número de minutos
$minutos = floor($segundos / $minutoSegundos);
$segundos %= $minutoSegundos;

// Os segundos restantes
$segundosRestantes = $segundos;
?>

<body>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="" method="get">
            <label for="">Qual é o total de segundos</label>
            <input type="number" name="segundos" value="<?php echo $segundos_inciais; ?>">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php
        echo "Analizando o valor que você digitou, <b>$segundos_inciais segundos</b> equivalem a um total de:<br>
        <ul>
        <li>$semanas Semanas</li>
        <li>$dias Dias</li>
        <li>$horas Horas</li>
        <li>$minutos Minutos</li>
        <li>$segundosRestantes Segundos</li>
        </ul>";
        ?>
        <a href="../index.php">Voltar</a>
    </section>
</body>

</html>