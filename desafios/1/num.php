<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <section>
        <h1>Resultado final</h1>

        <?php
        $num = $_GET['num'] ?? "Número não foi informado";

        if ($num) {
            $susesor = $num + 1;
            $antesesor = $num - 1;
        }
        ?>

        <p>O número escolhido foi: <?php echo $num; ?></p>

        <?php if ($num) : ?>
            <p>O seu antesesor: <?php echo $antesesor; ?></p>
            <p>O seu susesor: <?php echo $susesor; ?></p>
        <?php endif ?>

        <a href="javascript:history.go(-1)"><button>Voltar</button></a>

    </section>
</body>

</html>