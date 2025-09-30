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
    if (isset($_POST['numero'])) {
        $api_key = "ff0dfa2539ad9fb85f355c32"; 
        $url = "https://v6.exchangerate-api.com/v6/$api_key/latest/BRL"; // base BRL

        // inicializa cURL
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // evitar erro SSL em localhost
        $response = curl_exec($ch);

        if ($response === false) {
            die("<p>Erro cURL: " . curl_error($ch) . "</p>");
        }
        curl_close($ch);

        // processa resposta
        $data = json_decode($response, true);

        if (!isset($data['conversion_rates'])) {
            die("<p>Erro ao processar resposta da API.</p>");
        }

         $value = floatval(str_replace(",", ".", $_POST['numero']));

        // taxas
        $usd = $data['conversion_rates']['USD'];
        $eur = $data['conversion_rates']['EUR'];

        // conversões
        $result = $value * $usd;
        $result2 = $value * $eur;

        echo "<p>Com R$".number_format($value, 2, ',', '.')." você pode comprar U$ <strong>".number_format($result, 2, ',', '.')." </strong></p>";
        echo "<p>Com R$".number_format($value, 2, ',', '.')." você pode comprar € <strong>".number_format($result2, 2, ',', '.')." </strong></p>";
    } else {
        echo "<p>Insira um valor</p>";
    }
        ?>
        <div>
            <input type="button" value="Voltar" onclick="window.location.href='index.html'">

            </input>
        </div>



    </section>


</body>

</html>