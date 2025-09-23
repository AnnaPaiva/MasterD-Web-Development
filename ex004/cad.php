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
        <h1>Resultado Final</h1>
    </header>

    <main>
        <?php 
         $Res = $_GET ["numero"] ?? 0;
         $numero_antes = $Res -1;
         $numero_depois = $Res +1; 
         echo "<p> O número escolhido foi $Res.";
         echo "<p> Seu antecessor é $numero_antes.";
            echo "<p> Seu sucessor é $numero_depois.";
                
        ?>
        <br>

        <div>
            <p> <a href="javascript:history.go(-1)"> &#x21BB Voltar </a></p>
        </div>



    </main>
</body>

</html>