<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calculadora de Tempo</title>
</head>

<body>
    <?php
    //Tabela de segundos
    // 1m - 60 seg
    // 1h - 3.600 seg
    // 1d - 86.400 seg
    // 1s - 604.800 seg

    $total = $_GET['v1'] ?? 1;
    ?>
    <main>
        <section class="formulario">
            <h1>Calculadora de tempo</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>">
                <label for="v1">Qual é o total de segundos</label>
                <input type="number" name="v1" id="v1" value="<?= $total ?>">

                <input type="submit" value="Calcular">
            </form>
        </section>

        <section class="resultado">
            <h2>Totalizando tudo</h2>
            <?php
            echo "<p>Analisando o valor que você digitou, <strong>$total segundos</strong> equivalem a um total de:</p><br>";

            $sobra = $total;
            //Semanas
            $semana = intdiv($sobra, 604800);
            $sobra = $sobra % 604800;
            //Dias
            $dia = intdiv($sobra, 86400);
            $sobra = $sobra % 86400;
            //Horas
            $hora = intdiv($sobra, 3600);
            $sobra = $sobra % 3600;
            //Minutos
            $minuto = intdiv($sobra, 60);
            $sobra = $sobra % 60;
            //Segundos
            $segundo = $sobra;


            echo "<ul>
                <li>$semana semanas</li>
                <li>$dia dias</li>
                <li>$hora horas</li>
                <li>$minuto minutos</li>
                <li>$segundo segundos</li>
            </ul>"
            ?>
        </section>
    </main>
</body>

</html>