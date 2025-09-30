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
         $Res = number_format($_GET["numero"], 2, ",", ".");
         $Dolar = number_format($_GET["numero"] / 5.37, 2, ",", ".");
         $Euro = number_format($_GET["numero"] / 6.27, 2, ",", ".");
         echo "<p> Seus R$ $Res equivalem a: </p>";
            echo "<ul> <li> US$ $Dolar </li>";
            echo "<li> € $Euro </li> </ul>";
            echo "<p> <strong>*Cotação utilizada:</strong> &#9658 US$ 1,00 = R$ 5,37   &#9658 € 1,00 = R$ 6,27 </p>";
        ?>
        <br>

        <div>
            <input type="button" value="Voltar" onclick="window.location.href='index.html'">

            </input>
        </div>



    </section>
</body>

</html>