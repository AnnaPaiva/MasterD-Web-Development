<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Resultado do Formulário</h1>
    </header>

    <main>

        <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $telemovel = $_POST["telemovel"];
        $horas = (int)$_POST["horas"];
        $dias = (int)$_POST["dias"];
        $preco = (float)$_POST["preco"];
        

        $pagamento = ($dias * $horas) * $preco;
      
        


        echo "<h3>Dados inseridos:</h3>";
        echo "Nome: $nome <br>";
        echo "Idade: $idade <br>";
        echo "Telemóvel: $telemovel <br>";
        echo "Horas semanais: $horas <br>";
        echo "Dias da semana: $dias <br>";
        echo "Preço por hora: $preco €<br>";
        echo "<strong>Pagamento : " .number_format($pagamento, 3, ",",".") . " €</strong>";
    }
   

?>
    </main>

</body>

</html>