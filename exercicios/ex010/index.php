<?php
// o php sempre tenta converter para um inteiro
$arrey = [
    1 => 'a',
    "1" => 'b',
    1.5 => 'c',
    true => 'd'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de dados em arrays</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <h1>Tipos</h1>
    </header>
    <section>

        <ul>
            <?php
            foreach ($arrey as $item) {
                echo "<li>" . $item . "</li>";
            }
            ?>
        </ul>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </section>
</body>

</html>