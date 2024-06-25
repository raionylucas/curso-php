<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Médias</title>
</head>

<body>
    <?php
    $v1 = $_GET["v1"] ?? 1;
    $p1 = $_GET["p1"] ?? 1;
    $v2 = $_GET["v2"] ?? 1;
    $p2 = $_GET["p2"] ?? 1;
    ?>
    <main>
        <section class="formulario">
            <h1>Médias Aritiméticas</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>">
                <label for="v1">1º Valor</label>
                <input type="number" name="v1" id="v1" value="<?= $v1 ?>">

                <label for="p1">1º Peso</label>
                <input type="number" name="p1" id="p1" value="<?= $p1 ?>">

                <label for="v2">2º Valor</label>
                <input type="number" name="v2" id="v2" value="<?= $v2 ?>">

                <label for="p2">2º Peso</label>
                <input type="number" name="p2" id="p2" value="<?= $p2 ?>">

                <input type="submit" value="Calcular">
            </form>
        </section>

        <section class="resultado">
            <h2>Cálculo das médias</h2>
            <?php
            $media_simples = ($v1 + $v2) / 2;
            $media_pond = (($v1 * $p1) + ($v2 * $p2)) / ($p1 + $p2);

            echo "<p>Analisando os valores $v1 e $v2:</p><br>";
            echo "<ul>
                <li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a " . number_format($media_simples, 2, ",", ".") . "</li>
                <li>A <strong>Média Aritimética Ponderada</strong> com pesos $p1 e $p2 é igual a " . number_format($media_pond, 2, ",", ".") . "</li>
            </ul>"
            ?>
        </section>
    </main>
</body>

</html>