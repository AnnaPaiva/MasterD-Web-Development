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
    // Propriedades (características da equipa)
    private $nome;
    private $ganhos;
    private $perdidos;

     // É chamado automaticamente quando criamos a equipa.
    public function __construct($nome, $ganhos = 0, $perdidos = 0) {
        $this->nome = $nome;
        $this->ganhos = $ganhos;
        $this->perdidos = $perdidos;
    }

     // São métodos que devolvem dados

    // Devolve o nome
    public function lerNome() {
        return $this->nome;
    }

    // Devolve os jogos ganhos
    public function lerGanhos() {
        return $this->ganhos;
    }

    // Devolve os jogos perdidos
    public function lerPerdidos() {
        return $this->perdidos;
    }

     // Calcula a percentagem de jogos ganhos
    public function qualidade() {
        $total = $this->ganhos + $this->perdidos;
        if ($total == 0) return 0; // evita divisão por zero
        return round(($this->ganhos / $total) * 100, 2); // percentagem com 2 casas decimais
    }

     // Soma uma vitória
    public function somarVitoria() {
        $this->ganhos++;
    }

    // Soma uma derrota
    public function somarDerrota() {
        $this->perdidos++;
    }
}

// Criamos uma equipas
$equipa1 = new Equipa("Vitória De Setúbal");
$equipa2 = new Equipa("Porto", 3, 1);
$equipa3 = new Equipa("Vasco da Gama", 2, 2);

$equipa3->somarVitoria(); // Vasco ganham mais um

// Adicionamos algumas vitórias e derrotas
$equipa1->somarVitoria();
$equipa1->somarVitoria();
$equipa1->somarDerrota();

// Guardamos todas as equipas num array
$equipas = [$equipa1, $equipa2, $equipa3];

// Mostramos os dados
echo "<h1>Classificação das Equipas</h1>";

foreach ($equipas as $eq) {
    echo "<h2>Equipa: " . $eq->lerNome() . "</h2>";
    echo "Jogos ganhos: " . $eq->lerGanhos() . "<br>";
    echo "Jogos perdidos: " . $eq->lerPerdidos() . "<br>";
    echo "Qualidade (percentagem de vitórias): " . $eq->qualidade() . "%<hr>";
}
?>
</body>

</html>