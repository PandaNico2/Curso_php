<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
$preco_produto = $_GET['preco_produto'] ?? "00.00";
$porcentagem = $_GET['porcentagem'] ?? 0;

$preco_novo = $preco_produto + ($preco_produto / $porcentagem * 100);
?>
<body>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="" method="get">
            <label for="">Preço do produto (R$)</label>
            <input type="number" name="preco_produto" id="preco_produto" value="<?php echo $preco_produto;?>">
            <label for="">Qual será o percentual de reajuste (<?php echo "$porcentagem%";?>)</label>
            <input type="range" min="0" max="100" name="porcentagem" value="<?php echo $porcentagem;?>"/>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>resultado do reajuste</h2>
        <?php
        echo "O produto que custava ". number_format($preco_produto, 2, ", ", ".") .", com $porcentagem% de aumento vai passar a custar ".  number_format($preco_novo, 2, ", ", ".") ." a partir de agora."
        ?>
        
        <a href="../index.php">Voltar</a>
    </section>
</body>

</html>