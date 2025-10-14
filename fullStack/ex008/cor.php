<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <?php 
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $cor = $GET['cor'] = 'Azul';
            echo "<h1>$cor</h1>";
            
        } 
        ?>
        <button onclick="location.href = 'index.php'">Voltar</button>

    </header>
</body>

</html>