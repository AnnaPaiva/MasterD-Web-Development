<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>

<body>
    <h1>Tipos Primitivos em PHP</h1>
    <?php 

   // $num = 300; // Inteiro

   // echo "O valor da variável num é $num <br>";
//$v = 300; 
//var_dump($v);

//$num = (int) 3e2; coerção de tipo, força o valor a ser inteiro

//$casado = false; // booleano
//var_dump($casado);

//$vet = [6,2,9,3,5];
//var_dump($vet);

class Pessoa {
    private string $nome;
}

//$p = new Pessoa();
//var_dump($p);

//$var = "Php \u{1F418}";
//echo $var;

//$nome = "Anna";
//$sobrenome = "Paiva";
//echo "Nome: $nome $sobrenome \u{1f460}";

//const CANAL = "Curso em Vídeo \u{1F499}";

//echo "Eu adoro o canal " . CANAL;

//$nome = "Anna";
//$sobrenome = "Paiva";
//$apelido = "Bibi";

//echo "$nome  \"$apelido\"   $sobrenome";

$canal = "Curso em Vídeo";
$ano = date("Y");
echo <<< TESTE
    Olá, galera do $canal! 
    Tudo bem com vcs ?
Como está sendo este ano de $ano.
Abraços! \u{1F49A}.

TESTE;




    ?>
</body>

</html>