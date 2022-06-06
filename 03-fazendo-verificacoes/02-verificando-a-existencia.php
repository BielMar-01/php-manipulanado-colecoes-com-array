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

// Jeito menos otimizado
//foreach ($notas as $aluno => $notas) {
//    if ($aluno === 'Ana') {
//        return true;
//    }
//}

// Jeito mais otimizado
echo 'Vinicius fez a prova: ' . PHP_EOL;
var_dump(array_key_exists('Vinicius', $notas));

echo 'Vinicius fez a prova: ' . PHP_EOL;
var_dump(isset($notas['Ana']));