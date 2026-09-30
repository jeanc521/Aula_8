<?php

$nome = $_GET['nome'];
$cidade = $_GET['cidade'];

 if ($nome && $cidade): ?>
        <p>Olá, <?= htmlspecialchars($nome) ?>! Você é de <?= htmlspecialchars($cidade) ?>.</p>
    <?php endif; 
?>

