<?php
require_once "DataBase.php";

// Conexão com o banco
$db = new DataBase("meu_banco_mysql", "root", "");
$conn = $db->connect();

// ========== CRIAR NOVO USUÁRIO ==========
if (isset($_POST['action']) && $_POST['action'] === 'create') {
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);

    if (!empty($nome) && !empty($email)) {
        $db->write("INSERT INTO usuarios (nome, email) VALUES (?, ?)", [$nome, $email]);
        header("Location: index.php"); // Atualiza a página
        exit;
    }
}

// ========== EDITAR USUÁRIO ==========
if (isset($_POST['action']) && $_POST['action'] === 'update') {
    $id = $_POST["id"];
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);

    if (!empty($nome) && !empty($email)) {
        $db->write("UPDATE usuarios SET nome = ?, email = ? WHERE id = ?", [$nome, $email, $id]);
        header("Location: index.php");
        exit;
    }
}

// ========== DELETAR USUÁRIO ==========
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $db->write("DELETE FROM usuarios WHERE id = ?", [$id]);
    header("Location: index.php");
    exit;
}

// ========== BUSCAR USUÁRIO PARA EDIÇÃO ==========
$editUser = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $dados = $db->read("SELECT * FROM usuarios WHERE id = ?", [$id]);
    if ($dados) $editUser = $dados[0];
}

// ========== LISTAR TODOS ==========
$usuarios = $db->read("SELECT * FROM usuarios ORDER BY id DESC");
$db->close();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>CRUD de Usuários</title>
    <style>
        body {
            font-family: Arial;
            background: #f7f7f7;
            margin: 40px;
        }

        h1 {
            color: #333;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
            margin-bottom: 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="email"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"],
        a.btn {
            background: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            display: inline-block;
        }

        input[type="submit"]:hover,
        a.btn:hover {
            background: #0056b3;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #007BFF;
            color: white;
        }

        a.btn-del {
            background: #dc3545;
        }

        a.btn-del:hover {
            background: #a71d2a;
        }

        a.btn-edit {
            background: #ffc107;
            color: black;
        }

        a.btn-edit:hover {
            background: #d39e00;
        }
    </style>
</head>

<body>

    <h1>CRUD de Usuários</h1>

    <!-- Formulário de cadastro ou edição -->
    <form method="POST" action="">
        <?php if ($editUser): ?>
            <h3>✏️ Editar Usuário</h3>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?= htmlspecialchars($editUser['id']) ?>">
            <input type="text" name="nome" value="<?= htmlspecialchars($editUser['nome']) ?>" required>
            <input type="email" name="email" value="<?= htmlspecialchars($editUser['email']) ?>" required>
            <input type="submit" value="Salvar Alterações">
            <a href="index.php" class="btn">Cancelar</a>
        <?php else: ?>
            <h3>➕ Novo Usuário</h3>
            <input type="hidden" name="action" value="create">
            <input type="text" name="nome" placeholder="Nome completo" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="submit" value="Cadastrar">
        <?php endif; ?>
    </form>

    <!-- Tabela de usuários -->
    <h2>Usuários cadastrados:</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($usuarios as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['id']) ?></td>
                <td><?= htmlspecialchars($user['nome']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td>
                    <a class="btn btn-edit" href="?edit=<?= $user['id'] ?>">Editar</a>
                    <a class="btn btn-del" href="?delete=<?= $user['id'] ?>"
                        onclick="return confirm('Tem certeza que deseja excluir este usuário?');">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>