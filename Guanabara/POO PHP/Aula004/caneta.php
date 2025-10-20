<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe com php</title>
</head>

<body>

    <?php
    class Caneta
    {
        public $modelo;
        private $ponta;
        private $tampada;
        private $cor;

        public function __construct($m, $p, $c)
        {
            $this->setModelo($m);
            $this->setPonta($p);
            $this->cor = $c;
            $this->tampar();
        }
        public function tampar()
        {
            $this->tampada = true;
        }
        public function getModelo()
        {
            return $this->modelo;
        }
        public function setModelo($m)
        {
            $this->modelo = $m;
        }

        public function getCor()
        {
            return $this->cor;
        }
        public function setCor($c)
        {
            $this->cor = $c;
        }

        public function getPonta()
        {
            return $this->ponta;
        }
        public function setPonta($p)
        {
            $this->ponta = $p;
        }
    }
    ?>
</body>

</html>