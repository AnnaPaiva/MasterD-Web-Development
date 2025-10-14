<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipas</title>
</head>

<body>

    <?php 
    require_once 'Equipa.php';
    $equipa1 = new Equipa("Portugal", 3);
    $equipa2 = new Equipa("Espanha", 4);
   

   
    echo "A equipa {$equipa1->lerNome()} tem {$equipa1->lerPontos()} pontos.<br>";
   echo "A equipa {$equipa2->lerNome()} tem  {$equipa2->lerPontos()} pontos.<br>";

   if ($equipa1->lerPontos() > $equipa2->lerPontos()) {
   echo "O vencedor é {$equipa1->lerNome()}!<br>";
   $equipa1->somarVitoria();
   $equipa2->somarDerrota();
} 
   
elseif ($equipa2->lerPontos() > $equipa1->lerPontos()) {
    echo "O vencedor é {$equipa2->lerNome()}!<br>";
    $equipa2->somarVitoria();
    $equipa1->somarDerrota();
} 


else {
    echo "Empate entre {$equipa1->lerNome()} e {$equipa2->lerNome()}!";
   $equipa1->somarEmpate();
   $equipa2->somarEmpate();
}

echo "<br><strong>Depois do jogo:</strong><br>";
echo "{$equipa1->lerNome()} → Pontos: {$equipa1->lerPontos()}, Vitórias: {$equipa1->vitoria}, Derrotas: {$equipa1->derrota}, Empates: {$equipa1->empate}<br>";
echo "{$equipa2->lerNome()} → Pontos: {$equipa2->lerPontos()}, Vitórias: {$equipa2->vitoria}, Derrotas: {$equipa2->derrota}, Empates: {$equipa2->empate}<br>";
    

    
     
    
   


    ?>
</body>


</html>