<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>

        <h1>Conversor de moedas</h1>
        <?php 
        // $Res = number_format($_GET["numero"], 2, ",", ".");
         //num_format formata o valor, o n 2 e a quantidade de casas decimais, a virgula é um separador de decimal e o ponto e o separador de milhar.
        // $Dolar = number_format($_GET["numero"] / 5.37, 2, ",", ".");
        // $Euro = number_format($_GET["numero"] / 6.27, 2, ",", ".");
         //echo "<p> Seus R$ " . $Res . " equivalem a: </p>";
           // echo "<ul> <li> US$ " . $Dolar . " </li>";
            //echo "<li> € " . $Euro . " </li> </ul>";
            //echo "<p> <strong>*Cotação utilizada:</strong> &#9658 US$ 1,00 = R$ 5,37  <br>
            // &#9658 € 1,00 = R$ 6,27 </p>";
            $real = $_GET['numero'] ?? 0;
            $dolar = $real / 5.37;
            $euro = $real / 6.27;
            $padrão = numfmt_create ("pt_BR", NumberFormatter::CURRENCY);
            echo "<p> Seus " . numfmt_format_currency($padrão, $real, "BRL") . "  equivalem a : <strong>  " . numfmt_format_currency($padrão, $dolar, "USD") . "</strong> e <strong>" . numfmt_format_currency($padrão, $euro, "EUR </strong></p>");
        ?>
        <br>

        <input type="submit" value="Voltar" onclick="window.location.href='index.html'">



    </header>
</body>

</html>