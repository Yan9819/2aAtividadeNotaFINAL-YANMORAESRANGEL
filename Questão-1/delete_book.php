<?php
include 'database.php';

if (isset($_GET['id'])) {
    $stmt = $db->prepare("DELETE FROM livros WHERE id = ?");
    $stmt->execute([$_GET['id']]);
}

header("Location: index.php");
exit;
