<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculando Raíz</title>
</head>

<body>
    <?php
    $numero = $_GET["numero"] ?? 0;

    ?>
    <main>
        <section class="formulario">
            <h1>Informe um número</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>">
                <label for="numero">Número</label>
                <input type="number" name="numero" id="numero" value="<?= $numero ?>">

                <input type="submit" value="Calcular">
            </form>
        </section>

        <section class="resultado">
            <h2>Resultado Final</h2>
            <?php
            $raiz_quadrada = sqrt($numero);
            $raiz_cubica = $numero ** (1 / 3);

            echo "<p>Analisando o número <strong>$numero</strong> temos:</p>";
            echo "<ul>
                <li>A sua raíz quadrada é " . number_format($raiz_quadrada, 3, ",", ".") . "</li>
                <li>A sua raíz cúbica é " . number_format($raiz_cubica, 3, ",", ".") . "</li>
                </ul>"
            ?>
        </section>
    </main>
</body>

</html>