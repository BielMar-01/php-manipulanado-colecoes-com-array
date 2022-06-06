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
var_dump(in_array(10, $notas));

echo 'Alguem tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas));

// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula