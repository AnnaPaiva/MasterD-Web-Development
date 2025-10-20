<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta de Banco</title>
</head>

<body>

    <pre>
        <?php
        require_once 'ContaBanco.php';
        $cb = new ContaBanco();
        $cb->setNumConta(2222);
        $cb->setTipo("CC");
        $cb->setDono("Jubileu");
        $cb->setSaldo(1000);
        $cb->setStatus(true);

        echo "<p>Seja bem-vindo(a) senhor(a) {$cb->getDono()}!<br>
        Sua conta de número {$cb->getNumConta()} do tipo {$cb->getTipo()} foi criada com sucesso!<br>
        Seu saldo atual é de R$ {$cb->getSaldo()}<br> </p>";
        $cb->depositar(500);
        $cb->sacar(200);
        $cb->fecharConta();
        $cb->pagarMensal();

        // print_r($cb);

        ?>
    </pre>

</body>

</html>