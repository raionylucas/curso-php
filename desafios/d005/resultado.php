<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <main>
        <h1>Número Real</h1>
        <?php
        //Pegando número do formulário
        $numero = $_GET["numero"] ?? 0;

        echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuário</p></br>";

        $int = (int) $numero;
        $fra = $numero - $int;

        echo "<ul>
            <li>A parte inteira do número é <strong> " . number_format($int, 0, ",", ".") . "</strong></li>
            <li>A parte fracionada do número é <strong> " . number_format($fra, 3, ",", ".") . "</strong></li>
        </ul>"
        ?>

        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>