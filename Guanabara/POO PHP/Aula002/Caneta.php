<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO com PHP</title>
</head>

<body>


    <?php 
    
       class Caneta {
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar (){
            echo "Estou rabiscando com a caneta $this->cor, com ponta $this->ponta <br>";
        }
        function tampar(){
           
        }
        function destampar(){

        }   
    }
    

    ?>
    <?php 
     require_once 'Caneta.php';
      $c1 = new Caneta(); 
      $c1->cor = "Azul";
      $c1->ponta = 0.5;
      $c1->tampada = true;
      $c1->rabiscar();

     //  echo "<pre>" ;
       //print_r($c1);
       //echo "</pre>" ;
        
     
    ?>
</body>

</html>