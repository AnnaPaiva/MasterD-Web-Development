<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?php
        date_default_timezone_set("Europe/Lisbon");
        echo "Hoje é dia " . date("d/M/Y") . "<br>";
        echo "Agora são " . date("G:i:s T");
    ?>
</body>

</html>