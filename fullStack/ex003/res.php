<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatoração em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Resultado</h1>
    </header>

    <main>

        <?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = (int) $_POST ["numero"];
        
        function fatorial($n) {
        if ($n == 0 || $n == 1) {
            return "1";
        } else {
        return bcmul($n, fatorial($n - 1)); // Multiplicação de grandes números
        }
    }


    echo "O fatorial de $n é: " . fatorial($n);

    }
    
    ?>
    </main>
</body>

</html>