<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Números Aleatórios</title>
</head>

<body>
    <main>
        <h1>Números Aleatórios</h1>
        <?php
        //Pegando valor gerado
        $valor = mt_rand(0, 100);

        //Imprimendo valor gerado
        echo "<p>O  número gerado foi <strong>$valor</strong></p>"
        ?>

        <!-- Gerando novo valor -->
        <button onclick="javascript:window.location.reload(true)">Gerar Número</button>
    </main>
</body>

</html>