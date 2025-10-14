<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes no PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <?php
// Definição da classe Equipa
class Equipa {
    public $nome;
    public $pontos;
    public $vitoria = 0;
    public $empate = 0;
    public $derrota = 0;
   
    public function __construct($nome = null, $pontos = 0) {
        $this->nome = $nome;
        $this->pontos = $pontos;
    }
    public function lerNome(){
        return $this->nome;
    }
    public function lerPontos(){    
        return $this->pontos;
}
   
    public function somarVitoria() {
        $this->vitoria++;
        $this->pontos += 4;
    }
    public function somarDerrota() {
        $this->derrota++;
    }
    public function somarEmpate() {
        $this->empate++;
        $this->pontos += 1;
    }
}
   
?>
</body>

</html>
    
    
     