<?php
$nome = $_GET['nome'];
$cidade = $_GET['cidade'];

if($nome && $cidade == 'Curitiba'): ?>
    <p>Ola. <?=  htmlspecialchars($nome)?> Voce e Curitibano</p>

<?php else: ?>
 <p>Ola. <?= htmlspecialchars($nome)?> Voce nao e Curitibano, sinto muito</p>

<?php endif; 


?>
