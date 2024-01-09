<?php
$conta1 = [
    'titular' => 'Liz',
    'saldo' => '8500,00'
];
$conta2 = [
    'titular' => 'Isadora',
    'saldo' => '1300,00'
];
$conta3 = [
    'titular' => 'Thales',
    'saldo' => '8000,00'
];

// arrei associativo
$contasCorrentes = [$conta1, $conta2, $conta3];

// adiciona no proximo indice
$contasCorrentes[] =[
    'titular' => 'Lipe',
    'saldo' => '3500,00'
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta corrente com arrays</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <h1>Conta corrente</h1>
    </header>
    <section>

        <ul>
            <?php
            // for($i=0; $i< count($contasCorrentes); $i++){
            //     echo "<li>";
            //     echo $contasCorrentes[$i]['titular'];
            //     echo "</li>";
            // }
            foreach ($contasCorrentes as $cpf => $conta) : ?>
            
                    <?php
                    echo "<li>" . $cpf . " - " . $conta['titular'] . "</li>";
                    ?>
              
            <?php
            endforeach
            ?>
        </ul>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </section>
</body>

</html>