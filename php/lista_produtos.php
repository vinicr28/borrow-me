<?php

$produtos_esportes = [51, 97];

echo 'VARIVÁVEL PRODUTOS ESPORTES<br>';
print_r($produtos_esportes);

echo '<br>';

echo 'VAR DUMP<br>';
var_dump($produtos_esportes);


echo '<br>';

echo 'ATRIBUINDO PRODUTO<br>';

$$produtos_esportes[0] = ['macbook', 'apple', 1500];

// echo '<br>';
// echo $ESP51;

?>

