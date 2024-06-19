<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        //Cotação da API do Banco Central 
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        //Valor em reais inserido
        $reais = $_GET["valor"];

        //Conversão
        $dolares = $reais / $cotacao;

        //Mostrando resultado da forma tradicional
        // echo "<p>Seus R$" . number_format($reais, 2, ",", ".") . " equivalem a US$" . number_format($dolares, 2, ",", ".") . "</p>"
        // 

        //Formatação de moedas com internacionalização (Biblioteca intl - Internalization PHP)
        $padrao  = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolares, "USD") . "</p></br>";

        echo "<p>Cotação atual: <strong>" . numfmt_format_currency($padrao, $cotacao, "BRL") . "</strong> (Dado do Banco Central)</p>"
        ?>

        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>