<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anatomia da Divisão</title>
</head>

<body>
    <?php
    $dividendo = $_GET["dividendo"] ?? 0;
    $divisor = $_GET["divisor"] ?? 0;
    ?>
    <main>
        <section class="formulario">
            <h1>Anatomia de uma divisão</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>">
                <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">

                <label for="divisor">Divisor</label>
                <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">

                <input type="submit" value="Analisar">
            </form>
        </section>

        <section class="resultado">
            <h2>Estrutura da divisão</h2>
            <?php
            $resto = $dividendo % $divisor;
            $quo = $dividendo / $divisor;

            echo "<ul>
                <li>O dividendo é $dividendo</p></li>
                <li>O divisor é $divisor</li>
                <li>O resto é $resto</p></li>
                <li>O quociente é " . round($quo) . "</li>
            </ul>"
            ?>
        </section>
    </main>
</body>

</html>