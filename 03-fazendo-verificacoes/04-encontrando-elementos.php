<?php

$notas = [
    'Vinicius' => null,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Ana' => 10

];

krsort($notas);
var_dump($notas);

if (is_array($notas)){
    echo 'Sim é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Vinicius fez a prova: ' . PHP_EOL;
var_dump(array_key_exists('Vinicius', $notas));

echo 'Vinicius fez a prova: ' . PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Alguem tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas);
var_dump(array_search(6, $notas));