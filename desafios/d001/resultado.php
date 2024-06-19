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
        <h1>Resultado</h1>
        <?php
        //Pegando valor do formulário
        $valor = $_GET["numero"];

        //Imprimindo resultado
        echo "<p>O número escolhido foi <strong>$valor</strong></p>";
        echo "<p>O seu antecessor é " . $valor - 1 . "</p>";
        echo "<p>O seu sucessor é " . $valor + 1 . "</p>"
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>