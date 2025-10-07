<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Data Futura
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>Data Futura</h1>
        <form method="get">
            <label>Quantos dias quer adicionar à data atual?</label>
            <input type="number" name="dias" required>
            <button type="submit">Calcular</button>
        </form>
    </main>

    <section>


        <?php 

        
        function adicionarDias($dias) {
            $dataAtual = new DateTime();

            $dataAtual->modify("+$dias days");

            return $dataAtual->format("Y/m/d");
        }

        
        if (isset($_GET['dias'])) {
            $dias = intval($_GET['dias']);
            $novaData = adicionarDias($dias);
            echo "<p>Ao adicionar $dias dias a data atual </p><br> <h3> Próxima data: $novaData</h3>";
        }
        ?>
    </section>

</body>

</html>