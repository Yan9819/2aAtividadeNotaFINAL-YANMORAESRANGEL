<?php
include 'database.php';

if (isset($_GET['id'])) {
    $stmt = $db->prepare("UPDATE tarefas SET concluida = 1 WHERE id = ?");
    $stmt->execute([$_GET['id']]);
}

header("Location: index.php");
exit;

