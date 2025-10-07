<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Controle</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Estrutura de Controle</h1>

        <?php 

        $vector = array("laranja", "vermelho", "azul", "verde", "roxo", "rosa", "amarelo", "preto");

        echo "<ul>";
        foreach ($vector as $value) {
            echo "<li>Cor : $value \n </li>";
        }
        echo "</ul>";

    ?>


    </main>



</body>

</html>