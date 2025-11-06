<?php
require_once "DataBase.php";
$db = new DataBase("ajax_paises", "root", "");
$conn = $db->connect();

$paises = $db->read("SELECT * FROM paises");
$db->close();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Seleção de País e Províncias (AJAX + PHP)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f7f7f7;
        }

        h1 {
            color: #333;
        }

        select {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 220px;
        }

        label {
            font-weight: bold;
        }
    </style>
    <script>
        // Função AJAX para buscar províncias
        function carregarProvincias() {
            var idPais = document.getElementById("pais").value;
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "Provincias.php?id_pais=" + idPais, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("provincia").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>
</head>

<body>

    <h1>🌍 Escolha um País e veja suas Províncias</h1>

    <form>
        <label for="pais">País:</label><br>
        <select id="pais" name="pais" onchange="carregarProvincias()">
            <option value="">-- Selecione um país --</option>
            <?php foreach ($paises as $pais): ?>
                <option value="<?= $pais['id'] ?>"><?= htmlspecialchars($pais['nome']) ?></option>
            <?php endforeach; ?>
        </select>
        <br>

        <label for="provincia">Província:</label><br>
        <select id="provincia" name="provincia">
            <option value="">-- Selecione uma província --</option>
            <option value="4">São Paulo</option>
            <option value="5">Rio de Janeiro</option>
            <option value="6">Bahia</option>

        </select>
    </form>

</body>

</html>