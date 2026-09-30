<?php
$nome = 'Bruna';

session_start();

$_SESSION['nome'] = 'Bruna';

 if ($nome): ?>
        <p>Seja muito bem-vindo(a), <?= htmlspecialchars($nome)?></p>
    <?php endif; 
?>