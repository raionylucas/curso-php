<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia da Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $dividendo = $_GET["d1"]
            ?? 0;
        $divisor = $_GET["d2"] ?? 1;
        ?>
        <section class="formulario">
            <h1>Anatomia de uma divisão</h1>
            <form action="" method="get">
                <label for="f1">Dividendo</label>
                <input type="number" name="d1" id="d1" value="<?= $dividendo ?>" min="0">

                <label for="d2">Divisaor</label>
                <input type="number" name="d2" id="d2" value="<?= $divisor ?>" min="1">

                <input type="submit" value="Analisar">
            </form>
        </section>

        <section class="resultado">
            <h2>Estrutura da divisão</h2>
            <?php
            // Cálculos
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;

            // echo "<ul>";
            // echo "<li>Dividendo: $dividendo</li>";
            // echo "<li>Divisor: $divisor</li>";
            // echo "<li>Quociente: $quociente</li>";
            // echo "<li>Resto: $resto</li>";
            // echo "</ul>";
            ?>

            <table class="divisao">
                <tr>
                    <td><?= $dividendo ?></td>
                    <td><?= $divisor ?></td>
                </tr>
                <tr>
                    <td><?= $quociente ?></td>
                    <td><?= $resto ?></td>
                </tr>
            </table>
        </section>
    </main>
</body>

</html>