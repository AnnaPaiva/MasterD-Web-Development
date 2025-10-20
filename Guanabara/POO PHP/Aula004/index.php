<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php com get e set</title>
</head>

<body>
    <pre>
    <?php require_once 'caneta.php';
    $c1 = new Caneta("Compacta", "Vermelha", 0.7);
    $c2 = new Caneta("Bic", "Azul", 0.5);


    print_r($c1);
    print_r($c2);












    /* $c1->setModelo("Bic Cristal");
    $c1->setPonta(0.5);
    echo "Eu tenho uma caneta modelo {$c1->getModelo()} de ponta {$c1->getPonta()}";*/


    ?>
    </pre>

</body>

</html>