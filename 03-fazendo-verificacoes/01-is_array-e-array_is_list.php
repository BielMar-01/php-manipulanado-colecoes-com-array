<?php

$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Ana' => 10

];

krsort($notas);
var_dump($notas);

//if (gettype($notas) === 'array') Outro jeito de fazer a verificação se é um array
if (is_array($notas)){
    echo 'Sim é um array' . PHP_EOL;
}

var_dump(array_is_list($notas)); // Retorna caso seja um array numerico sequencial