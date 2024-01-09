<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>

<body>
<a href="javascript:history.go(-1)"><button>Voltar</button></a>
    <?php
    // Absoluto
    $r1 = abs(-2000);
    echo ("<p>Valor absoluto</p><br><p>A resposta é: <b> $r1</b></p><br>");

    // Converter
    $r2 = base_convert(254, 10, 2);
    echo ("<p>Converter</p><br><p>A resposta é: <b> $r2</b></p><br>");

    // Minimo e maximo
    $r3 = min(3, 4, 10);
    echo ("<p>Minimo: <b> $r3</b></p><br>");
    $r4 = max(3, 4, 10);
    echo ("<p>Maximo: <b> $r4</b></p><br>");

    // pi
    $r4 = M_PI;
    $r5 = pi();
    echo ("<p>PI: <b> $r4</b></p><p>PI: <b> $r5</b></p><br>");

    // pow
    $r6 = pow(5, 2);
    echo ("<p>Pow: <b> $r6</b></p><br>");

    // 
    $r7 = sqrt(81);
    echo ("<p>: <b> $r7</b></p><br>");

    // 
    $r8 = "Isadora" . " Mello";
    var_dump($r8);

    ?>
</body>

</html>