<?php include 'database.php'; ?>

<h1>📝 Lista de Tarefas</h1>

<h2>➕ Nova Tarefa</h2>
<form action="add_tarefa.php" method="post">
    <label>Descrição: <input type="text" name="descricao" required></label><br>
    <label>Data de Vencimento: <input type="date" name="data_vencimento" required></label><br>
    <button type="submit">Adicionar</button>
</form>

<h2>⏳ Tarefas Pendentes</h2>
<ul>
<?php
$tarefas = $db->query("SELECT * FROM tarefas WHERE concluida = 0 ORDER BY data_vencimento")->fetchAll();
foreach ($tarefas as $t) {
    echo "<li>{$t['descricao']} (venc.: {$t['data_vencimento']}) 
    <a href='update_tarefa.php?id={$t['id']}'>✅ Concluir</a> 
    <a href='delete_tarefa.php?id={$t['id']}'>❌ Excluir</a></li>";
}
?>
</ul>

<h2>✅ Tarefas Concluídas</h2>
<ul>
<?php
$finalizadas = $db->query("SELECT * FROM tarefas WHERE concluida = 1 ORDER BY data_vencimento")->fetchAll();
foreach ($finalizadas as $f) {
    echo "<li><s>{$f['descricao']}</s> (concluída)</li>";
}
?>
</ul>

