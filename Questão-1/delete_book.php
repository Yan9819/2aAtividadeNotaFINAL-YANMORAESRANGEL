<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $db->prepare("INSERT INTO livros (titulo, autor, ano_publicacao) VALUES (?, ?, ?)");
    $stmt->execute([
        $_POST['titulo'],
        $_POST['autor'],
        $_POST['ano_publicacao']
    ]);
}

header("Location: index.php");
exit;
