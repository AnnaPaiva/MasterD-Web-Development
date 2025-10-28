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
        $cb1 = new ContaBanco(); //Jubileu
        $cb2 = new ContaBanco(); // Creuza
        $cb1->abrirConta("CC");
        $cb1->setNumConta(1111);
        $cb1->setDono("Jubileu");
        $cb2->abrirConta("CP");
        $cb2->setNumConta(2222);
        $cb2->setDono("Creuza");

        $cb1->depositar(300);
        $cb2->depositar(500);

        $cb2->sacar(1000);

        $cb1->pagarMensal();
        $cb2->pagarMensal();

        $cb1->sacar(338);
        $cb2->sacar(630);
        $cb1->fecharConta();
        $cb2->fecharConta();


        print_r($cb1);
        print_r($cb2);

        ?>
    </pre>

</body>

</html>