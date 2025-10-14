<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes POO</title>

</head>

<body>

    <pre>
       <?php
    require_once 'classes/Pessoa.php';
    
    $pessoa1 = new Pessoa();
    $pessoa1->nome = "Maria";
    $pessoa1->idade = 25;
    
    echo $pessoa1->apresentar();
    ?>
    
    
    </pre>
</body>

</html>