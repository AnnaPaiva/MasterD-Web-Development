<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POO com PHP</title>
</head>

<body>
    <?php 
     require_once 'Caneta.php';
      $c1 = new Caneta(); 
      $c1->cor = "Azul";
      $c1->ponta = 0.5;
      $c1->tampada = false;

        print_r($c1);
        
     
    ?>
</body>

</html>