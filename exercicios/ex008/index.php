<?php
$idadesList = [1, 2, 3, 4, 5];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex002 - Listar</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <h1>Listar array</h1>
    </header>
    <section>
        <ul>
            <?php
            for ($i = 0; $i < count($idadesList); $i++) {
                echo "<li>$idadesList[$i]</li>";
            }
            ?>
        </ul>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
</body>

</html>