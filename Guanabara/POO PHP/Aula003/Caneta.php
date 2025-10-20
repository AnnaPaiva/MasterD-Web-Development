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
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        function Caneta(){
            return "Olá, minha caneta tem a cor  {$this->cor} e tem ponta {$this->ponta}.<br>";
        }
        public function rabiscar (){
            if ($this->tampada == true){
                return "ERRO! Não posso rabiscar<br>";
            } 
             else{
            echo "Estou rabiscando com a caneta $this->cor, com ponta $this->ponta <br>";
        }
        }
        public function tampar(){
         $this->tampada = true;
        }

        public function destampar(){
            $this->tampada = false;
            }
     }   
            
       
    ?>

</body>

</html>