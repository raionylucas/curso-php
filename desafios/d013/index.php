<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Caixa Eletrônico</title>
</head>

<body>
    <?php
    $valor = $_GET["v1"] ?? 5;

    //Formatação de moedas com internacionalização (Biblioteca intl - Internalization PHP)
    $padrao  = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <section class="formulario">
            <h1>Caixa Eletrônico</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>">
                <label for="v1">Qual valor você deseja sacar? (R$)</label>
                <input type="number" name="v1" id="v1" value="<?= $valor ?>" min="5">

                <span>*Notas disponíveis R$100, R$50, R$10, R$5</span>

                <input type="submit" value="Calcular">
            </form>
        </section>

        <section class="resultado">
            <?php
            echo "<h2>Sque de " . numfmt_format_currency($padrao, $valor, "BRL") . " realizado</h2>";
            echo "<p>O caixa eletrônico vai te entregar as seguintes notas:</p><br>";

            $sobra = $valor;
            //Cem
            $cem = intdiv($sobra, 100);
            $sobra = $sobra % 100;
            //Cinquenta
            $cinquenta = intdiv($sobra, 50);
            $sobra = $sobra % 50;
            //Dez
            $dez = intdiv($sobra, 10);
            $sobra = $sobra % 10;
            //cinco
            $cinco = intdiv($sobra, 5);
            $sobra = $sobra % 5;
            ?>
            <ul>
                <li><img src="./imagens/100-reais.jpg" alt="Cédula de cem reais"><?= "  x$cem" ?></li>
                <li><img src="./imagens/50-reais.jpg" alt="Cédula de cinquenta reais"><?= "  x$cinquenta" ?></li>
                <li><img src="./imagens/10-reais.jpg" alt="Cédula de dez reais"><?= "  x$dez" ?></li>
                <li><img src="./imagens/5-reais.jpg" alt="Cédula de cinco reais"><?= "  x$cinco" ?></li>
            </ul>
        </section>
    </main>
</body>

</html>