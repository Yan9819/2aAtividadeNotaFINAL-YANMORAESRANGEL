<?php include 'database.php'; ?>

<h2>📚 Livros Cadastrados</h2>

<?php
$livros = $db->query("SELECT * FROM livros")->fetchAll();

if ($livros):
    echo "<ul>";
    foreach ($livros as $livro) {
        echo "<li><strong>{$livro['titulo']}</strong> - {$livro['autor']} ({$livro['ano_publicacao']}) 
        <a href='delete_book.php?id={$livro['id']}'>❌ Excluir</a></li>";
    }
    echo "</ul>";
else:
    echo "<p>Nenhum livro cadastrado.</p>";
endif;
?>

<h2>➕ Adicionar Livro</h2>
<form action="add_book.php" method="post">
    <label>Título: <input type="text" name="titulo" required></label><br>
    <label>Autor: <input type="text" name="autor" required></label><br>
    <label>Ano: <input type="number" name="ano_publicacao" required></label><br>
    <button type="submit">Salvar</button>
</form>

