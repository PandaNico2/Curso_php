<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="../style.css">
</head>
<?php 
$data = date("Y");

$nascimento = $_GET['nascimento'] ?? 0;
$atual =  $_GET['atual'] ?? 2023;

$anos = $atual - $nascimento;
?>
<body>
    <main>
        <h1>Calculando a idade</h1>
        <form action="" method="get">
            <label for="">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" value="<?php echo $nascimento;?>">
            <label for="">Quer saber sia idade em que ano? (atualmente estamos em <?php echo "<b> $data</b>"?>)</label>
            <input type="number" name="atual" id="atual" value="<?php echo $atual;?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        echo "Quem nasceu em $nascimento vai ter $anos em $atual!";
        ?>
        <a href="../index.php">Voltar</a>
    </section>
</body>

</html>