<?php

echo "Boas-vindas". $_GET['nome'] . $_GET['cidade'];

if (isset($_GET['cidade']) == "curitiba") {
    $cidade = $_GET['cidade'];
    echo  "Você é Curitibano!.";
} else {
    echo "Voce deve ser de outra cidade.";
}


?>