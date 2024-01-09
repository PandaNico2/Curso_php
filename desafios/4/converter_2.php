<?php
$inicio = date("m-d-Y", strtotime("-7 days"));
$fim = date("m-d-Y");
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);
// var_dump($dados);

$cotacao = $dados['value'][0]['cotacaoCompra'];
// echo "A cotação foi: $cotacao";
?>

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
        <h1>Convertor de moedas v2.0</h1>
        <?php
        $real = $_GET['real'] ?? "Número não informado";
        $dolar = $real * $cotacao;
        echo "<p>Seus R$ $real equivalem a US$ $dolar</p>"
        ?>
        <p>*Cotação de <?php echo $cotacao; ?> obtida diretamente do site <a href=""><b>Banco do brasil</b></a></p>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </section>
</body>
</html>