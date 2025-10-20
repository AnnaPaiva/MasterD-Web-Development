<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>setter-getter</title>
</head>

<body>
    <pre>
    <?php
    class Caneta
    {
        private $modelo;
        private $cor;
        private $ponta;
        private $carga;
        private $tampada;

        public function __construct($m, $c, $p)
        {
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampada = false;
        }

        public function getModelo()
        {
            return $this->modelo;
        }

        public function setModelo($m)
        {
            $this->modelo = $m;
        }





        public function getTampada()
        {
            return $tampada = true;
        }


        public function getCor()
        {
            return $this->cor;
        }
        public function setCor($c)
        {
            $this->cor = $c;

            return $this;
        }


        public function getPonta()
        {
            return $this->ponta;
        }
        public function setPonta($p)
        {
            $this->ponta = $p;

            return $this;
        }


        public function getCarga()
        {
            return $this->carga;
        }
        public function setCarga($c)
        {
            $this->carga = $c;

            return $this;
        }
    }




    ?>
    </pre>
</body>

</html>