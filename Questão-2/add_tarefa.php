<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $db->prepare("INSERT INTO tarefas (descricao, data_vencimento) VALUES (?, ?)");
    $stmt->execute([
        $_POST['descricao'],
        $_POST['data_vencimento']
    ]);
}

header("Location: index.php");
exit;
