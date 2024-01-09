<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
$val_1 = $_GET['val_1'] ?? 0;
$val_2 = $_GET['val_2'] ?? 0;

$pas_1 = $_GET['pas_1'] ?? 0;
$pas_2 = $_GET['pas_2'] ?? 0;

if ($pas_1 && $pas_2 > 0) {
    $media_ponderada = (($val_1 * $pas_1) + ($val_2 * $pas_2)) / ($pas_1 + $pas_2);
} else{
    $media_ponderada = "0";
}
$media_simples = ($val_1 + $val_2) / 2;
?>

<body>
    <!--  -->
    <main>
        <h1>Médias aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">1° Valor</label>
            <input type="number" name="val_1" id="val_1" value="<?php echo $val_1?>">
            <label for="">1° Peso</label>
            <input type="number" name="pas_1" id="pas_1" value="<?php echo $pas_1?>">
            <label for="">2° Valor</label>
            <input type="number" name="val_2" id="val_2" value="<?php echo $val_2?>">
            <label for="">2° Peso</label>
            <input type="number" name="pas_2" id="pas_2" value="<?php echo $pas_2?>">
            <input type="submit" value="Calcular Médias">
        </form>
        <a href="../index.php">Voltar</a>
    </main>
    <section>
        <h2>Cálculo das médias</h2>
        <?php echo "Analizando os valores $val_1 e $val_2:<br>
        <ul>
        <li>A <b>média aritimétrica simples</b> entre os valores é igual a ".number_format($media_simples, 2, ", ", ".")."</li>
        <li>A <b>média aritimétrica ponderada</b> com pesos $pas_1 e $pas_2 é igual a ".number_format($media_ponderada, 2, ", ", ".")."</li>
        </ul>";
        ?>
    </section>
</body>

</html>