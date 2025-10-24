<?php
// ======================================================
//  GRAVAR DADOS DO CLIENTE EM UM FICHEIRO .TXT
// ======================================================

// Nome do ficheiro onde serão guardados os dados
$ficheiro = "dados_clientes.txt";

// Recolher informações do cliente
$ip = $_SERVER['REMOTE_ADDR'];        // Endereço IP do cliente
$dataHora = date("Y-m-d H:i:s");      // Data e hora atual
$porta = $_SERVER['REMOTE_PORT'];     // Porta usada pelo cliente
$url = $_SERVER['REQUEST_URI'];       // URL a partir do qual o cliente acedeu

// Criar a linha de texto a gravar
$linha = "IP: $ip | Data e hora: $dataHora | Porta: $porta | URL: $url" . PHP_EOL;

// Gravar a linha no ficheiro (se não existir, ele será criado automaticamente)
file_put_contents($ficheiro, $linha, FILE_APPEND | LOCK_EX);

// Mensagem de confirmação será exibida na página HTML abaixo


?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registo de Acessos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #d4fc79, #96e6a1);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        h1 {
            color: #2e7d32;
        }

        p {
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>📋 Registo de Acessos</h1>
        <p>Os seus dados foram gravados com sucesso!</p>
        <p>Verifique o ficheiro <strong>dados_clientes.txt</strong> na pasta do projeto.</p>
    </div>
</body>

</html>