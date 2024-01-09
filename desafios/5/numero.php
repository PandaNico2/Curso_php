<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 5</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>

        <h1>Analizador de numero real</h1>
        <?php
        $num = $_POST['n'] ?? 0;

        echo "<p>Analizando o número <strong>" . number_format($num, 3, ", ", ".") . "</strong> informado pelo usuario</p>";

        $int = (int)$num;
        $fra = $num - $int;

        echo "<ul>
        <li>A parte inteira do número é <strong>". number_format($int, 3, ", ", ".")."</strong></li>
        <li>A parte fracionaria do número é <strong>". number_format($fra, 3, ", ", ".")."</strong></li>
        </ul>";

        ?>
         <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </main>
</body>

</html>