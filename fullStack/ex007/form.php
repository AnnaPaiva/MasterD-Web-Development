<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Resposta do Formulário</h1>
    </header>

    <main>
        <?php 
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Coleta os dados do formulário
        $nome = strtoupper($_POST ['nome'] ?? 'Nome não informado');
        $txt = strtoupper($_POST ['txt'] ?? 'Texto não informado');
        $idade = $_POST ['idade'] ?? 'Idade não informada';
        $animal = $_POST ['animais'] ?? 'não selecionado';
        

        echo "<h3>Olá, seja bem-vindo(a), seu nome é: $nome. \n Você mora no endereço: $txt. \n Vocé tem $idade anos. \n E $animal, tem animais de estimação!!<h3/>";
        }
        ?>
    </main>


</body>

</html>