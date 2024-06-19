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
        //Cotação fixa
        $cotacao = 5.46;

        //Valor em reais inserido
        $reais = $_GET["valor"];

        //Conversão
        $dolares = $reais / $cotacao;

        //Mostrando resultado da forma tradicional
        // echo "<p>Seus R$" . number_format($reais, 2, ",", ".") . " equivalem a US$" . number_format($dolares, 2, ",", ".") . "</p>"
        // 

        //Formatação de moedas com internacionalização (Biblioteca intl - Internalization PHP)
        $padrao  = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolares, "USD") . "</p>"
        ?>

        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>