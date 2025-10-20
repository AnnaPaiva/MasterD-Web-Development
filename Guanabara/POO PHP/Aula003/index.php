<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POO com PHP</title>
</head>

<body>
    <pre>
    <?php 
     require_once 'Caneta.php';
     
      $c1 = new Caneta(); 
      $c1->modelo = "Bic Cristal";
      $c1->cor = "Azul";
      //$c1->ponta = 0.5; //Erro pois é private
      //$c1->carga = 80; //Erro pois é protected
      //$c1->tampada = false; //Erro pois é protected

      $c1->rabiscar();
      
      $c1->tampar(); //Erro pois é protected, se mudar o método para public funciona e dá acesso ao atributo protected que se encontra na mesma classe
      $c1->destampar(); //Erro pois é protected, se mudar o método para public funciona e dá acesso ao atributo protected que se encontra na mesma classe
      print_r($c1);
     
      ?>
    </pre>



</body>

</html>