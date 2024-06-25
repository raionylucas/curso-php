<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculando Idade</title>
</head>

<body>
    <?php
    $ano_atual = date('Y');
    $ano_nasc = $_GET['v1'] ?? 1;
    $ano_digit = $_GET['v2'] ?? $ano_atual;
    ?>
    <main>
        <section class="formulario">
            <h1>Calculando sua idade</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>">
                <label for="v1">Em que ano você nasceu?</label>
                <input type="number" name="v1" id="v1" value="<?= $ano_nasc ?>">

                <label for="v2">Quer saber suas idade em que ano? (Atualmente estamos em
                    <strong><?= "$ano_atual" ?></strong>)</label>
                <input type="number" name="v2" id="v2" value="<?= $ano_digit ?>">

                <input type="submit" value="Calcular">
            </form>
        </section>

        <section class="resultado">
            <?php
            $idade = $ano_digit - $ano_nasc;

            echo "<p>Quem nasceu em $ano_nasc vai ter <strong>$idade anos</strong> em $ano_digit</p>"
            ?>
        </section>
    </main>
</body>

</html>