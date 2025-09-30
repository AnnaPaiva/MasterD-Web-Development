<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informe um Número</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>



    <section>
        <h1>Trabalhando com números aleatórios</h1>

        <?php 
      $res = mt_rand(1, 100);
      echo "<h2> Gerando um número aleatório entre 1 e 100 </h2>";
      echo "<h2> O número gerado foi: <strong>$res</strong> </h2>";
      
      ?>
        <input type="submit" value="Gerar outro" />
    </section>


    <script>
    document.querySelector("input[type=submit]").onclick = function() {
        window.location.reload();
    };
    </script>


</body>

</html>