<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section>

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

             $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

        

            $cotação = $dados["value"][0]["cotacaoCompra"];
            
            $real = $_GET['numero'] ?? 0;
            $dolar = $real / $cotação;
            $euro = $real / $cotação;
            $padrão = numfmt_create ("pt_BR", NumberFormatter::CURRENCY);
            echo "<p> Seus " . numfmt_format_currency($padrão, $real, "BRL") . "  equivalem a : <strong>  " . numfmt_format_currency($padrão, $dolar, "USD") . "</strong>";
        ?>
        <br>

        <input type="submit" value="Voltar" onclick="window.location.href='index.html'">



    </section>
</body>

</html>