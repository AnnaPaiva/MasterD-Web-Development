<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco</title>
</head>

<body>

    <?php
    class ContaBanco
    {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;


        public function __construct()
        {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
        }


        public function abrirConta($t)
        {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            } elseif ($t == "CP") {
                $this->setSaldo(150);
            }
        }
        public function fecharConta()
        {
            if ($this->getSaldo() > 0) {
                echo "<p>Conta com dinheiro, não pode ser fechada.</p>";
            } elseif ($this->getSaldo() < 0) {
                echo "<p>Conta em débito, não posso fechar.</p>";
            } else {
                $this->setStatus(false);
                echo "<p>Conta de " . $this->getDono() . " fechada com sucesso!</p>";
            }
        }
        public function depositar($v)
        {

            if ($this->getStatus(true)) {
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Deposito de R$ $v autorizado na conta de " . $this->getdono() . "</p>";
            } else {
                echo "<p>Impossível depositar em uma conta fechada!</p>";
            }
        }
        public function sacar($v)
        {

            if ($this->getStatus()) {
                if ($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$ $v autorizado na conta de " . $this->getdono() . "</p>";
                } else {
                    echo "<p>Saldo insuficiente para saque!</p>";
                }
            } else {
                echo "<p>Impossível sacar de uma conta fechada!</p>";
            }
        }

        public function pagarMensal()
        {

            if ($this->getTipo() == "CC") {
                $v = 12;
            } elseif ($this->getTipo() == "CP") {
                $v = 20;
            }
            if ($this->getStatus()) {

                ($this->setSaldo($this->getSaldo() - $v));
                echo "<p>Mensalidade de R$ {$v} debitada na conta de " . $this->getDono() . ". Seu saldo atual é de R$" . $this->getSaldo() . "</p> ";
            } else {
                echo "<p>*Problemas com a conta, impossível pagar mensalidade!</p>";
            }
        }
        public function getNumConta()
        {
            return $this->numConta;
        }
        public function setNumConta($n)
        {
            $this->numConta = $n;
        }
        public function getTipo()
        {
            return $this->tipo;
        }
        public function setTipo($t)
        {
            $this->tipo = $t;
        }
        public function getDono()
        {
            return $this->dono;
        }
        public function setDono($d)
        {
            $this->dono = $d;
        }
        public function getSaldo()
        {
            return $this->saldo;
        }
        public function setSaldo($s)
        {
            $this->saldo = $s;
        }
        public function getStatus()
        {
            return $this->status;
        }
        public function setStatus($s)
        {
            $this->status = $s;
        }
    }
    ?>

</body>

</html>