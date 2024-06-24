<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Informe seu salário</title>
</head>

<body>
    <?php
    $salario = $_GET["salario"] ?? 0;
    $salario_min = 1412;

    //Formatação de moedas com internacionalização (Biblioteca intl - Internalization PHP)
    $padrao  = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    ?>
    <main>
        <section class="formulario">
            <h1>Anatomia de uma divisão</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>">
                <label for="salario">Salário (R$)</label>
                <input type="number" name="salario" id="salario" value="<?= $salario ?>">

                <?php

                echo "<p>Considerando o salário mínimo de <strong>" . numfmt_format_currency($padrao, $salario_min, "BRL") . "</strong></p>"

                ?>

                <input type="submit" value="Calcular">
            </form>
        </section>

        <section class="resultado">
            <h2>Resultado Final</h2>
            <?php
            $qt_salario_min = intdiv($salario, $salario_min);
            $resto = $salario - ($qt_salario_min * $salario_min);

            echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong>" . floor($qt_salario_min) . " salários mínimos + " . numfmt_format_currency($padrao, $resto, "BRL") . "</strong></p>"
            ?>
        </section>
    </main>
</body>

</html>