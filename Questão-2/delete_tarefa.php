<?php
include 'database.php';

if (isset($_GET['id'])) {
    $stmt = $db->prepare("DELETE FROM tarefas WHERE id = ?");
    $stmt->execute([$_GET['id']]);
}

header("Location: index.php");
exit;
