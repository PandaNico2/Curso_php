<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- informe um numero e me de o numero o antecessor e o sucessor -->

   <section>
        <h1>Convertor de moedas v1.0</h1>
        <?php
        $real = $_GET['real'] ?? "Número não informado";
        $dolar = $real * 5.22;
        echo "<p>Seus R$ $real equivalem a US$ $dolar</p>"
        ?>
        <p><b>Cotação fixa de 5,22</b> informada diretamente no codigo.</p>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </section>
</body>
</html>