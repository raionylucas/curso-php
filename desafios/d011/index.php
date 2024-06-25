<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajustador de Preços</title>
</head>

<body>
    <?php
    $preco = $_GET['v1'] ?? 1;
    $percent = $_GET['v2'] ?? 1;

    //Formatação de moedas com internacionalização (Biblioteca intl - Internalization PHP)
    $padrao  = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <section class="formulario">
            <h1>Reajustador de Preços</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>">
                <label for="v1">Preço do produto (R$)</label>
                <input type="number" name="v1" id="v1" value="<?= $preco ?>" step="0.01" min="0.10">

                <label for="v2">Qual será o percentual de reajuste? (<strong><span
                            id="percent"><?= "$percent%" ?></span></strong>)</label>
                <input type="range" name="v2" id="v2" value="<?= $percent ?>" min="0" max="100" step="1">

                <input type="submit" value="Calcular">
            </form>
        </section>

        <section class="resultado">
            <h2>Resultado do reajuste</h2>
            <?php
            $reajuste = (($preco / 100) * $percent) + $preco;

            echo "<p>O produto que custava " . numfmt_format_currency($padrao, $preco, "BRL") . ", com <strong>$percent% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($padrao, $reajuste, "BRL") . "</strong> a partir de agora</p>"
            ?>
        </section>
    </main>
    <script>
    let percent = document.querySelector("#v2")
    let percentText = document.querySelector("#percent")

    percent.addEventListener('input', e => {
        e.preventDefault()
        percentText.innerHTML = percent.value + '%'
    })
    </script>
</body>

</html>