<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <!-- informe um numero e me de o numero o antecessor e o sucessor -->

    <header>
        <h1>Sorteador de números</h1>
    </header>
    <section>

        <form method="POST">
            <input type="submit" name="sortear" value="sortear" />
        </form>
        <?php
        if (array_key_exists('sortear', $_POST)) {
            sortear();
        }

        function sortear()
        {
            $num = rand(0, 100);
            echo "<p>O número sorteado é: $num </p>";
        }
        ?>
        <a href="../index.php">Voltar</a>
    </section>
</body>

</html>