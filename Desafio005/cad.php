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
        <h1>Analisador de Número Real</h1>
        <?php


       
       
        $entrada = $_GET["numero"] ?? 0;
        $entrada = trim($entrada);

        // Remove espaços
        $entrada = str_replace(' ', '', $entrada);

        // Se houver vírgula, assumimos formato brasileiro (vírgula decimal, pontos de milhar)
        if (strpos($entrada, ',') !== false) {
            $entrada = str_replace('.', '', $entrada);  // remove pontos de milhar
            $entrada = str_replace(',', '.', $entrada); // vírgula → ponto decimal
        } else {
            // Se não houver vírgula, mas houver mais de um ponto, remove pontos extras
            $partes = explode('.', $entrada);
            if (count($partes) > 2) {
                $decimal = array_pop($partes);
                $entrada = implode('', $partes) . '.' . $decimal;
            }
        }

        // Agora deve estar em formato numérico
        if (is_numeric($entrada)) {
            $valor = ((float)$entrada >= 0) ? $entrada : $entrada = str_replace('-', '0.000','.', ',');
            $inteiro = (int)$valor;
            $fracionario = abs($valor - $inteiro);
            

            $inteiroFormatado = str_pad($inteiro, 4, '0', STR_PAD_LEFT);
            $fracionarioFormatado = substr(number_format($fracionario, 4, '.', ''), 2);

            echo "Número informado: <strong>" . number_format($valor, 4, ',', '.') . "</strong><br>";
            echo "<ul><li>Parte inteira: <strong>$inteiroFormatado</strong></li><br>";
            echo "<li>Parte fracionária: <strong>$fracionarioFormatado</strong></li><br>";
        } else {
            echo "<p style='color:red'>Valor inválido! Digite um número real (ex: 1234,456 ou 1234.456).</p>";
        }


        



        ?>
        <div>
            <input type="button" value="Voltar" onclick="window.location.href='index.html'">
        </div>
    </section>



</body>

</html>