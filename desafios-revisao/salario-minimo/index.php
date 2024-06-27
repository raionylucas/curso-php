<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário Mínimo</title>
</head>

<body>
    <?php
    $minimo = 1_380.60; //Serparador de milhar com underline implementado a apartir da versão 7.4 do PHP
    $salario = $_GET['sal'] ?? $minimo;
    ?>
    <main>
        <section class="formulario">
            <h1>Informe seu salário</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="sal">Salário (R$)</label>
                <input type="number" name="sal" id="sal" value="<?= $salario ?>" step="0.01">

                <p>Considerando o salário minimo de <strong>R$ <?= number_format($minimo, 2, ",", ".") ?></strong></p>

                <input type="submit" value="Calcular">
            </form>
        </section>

        <section class="resultado">
            <h2>Resultado Final</h2>
            <?php
            $total = intdiv($salario, $minimo);
            $dif = $salario % $minimo;

            echo "<p>Que recebe um salário de R\$" . number_format($salario, 2, ",", ".") . " ganha <strong> $total salários mínimos + R\$" . number_format($dif, 2, ",", ".") . "</strong></p> "
            ?>
        </section>
    </main>
</body>

</html>