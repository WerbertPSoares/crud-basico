<?php
include 'conexao.php';

$sql = "SELECT * FROM usuarios";
$stmt = $pdo->query($sql);
$usuarios = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="stylys.css">

</head>
<body>
    <h1>Usuários</h1>
    <a href="create.php">Adicionar Novo</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['id'] ?></td>
                    <td><?= $usuario['nome'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                    <td><?= $usuario['telefone'] ?></td>
                    <td>
                        <a href="update.php?id=<?= $usuario['id'] ?>">Editar</a>
                        <a href="delete.php?id=<?= $usuario['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
