<?php

$notasBimestre1 = [
  'Vinicius' => 6,
  'João' => 8,
  'Maria' => 9,
  'Roberto' => 7,
  'Ana' => 10
];

$notasBimestre2 = [
  'João' => 8,
  'Maria' => 10,
  'Roberto' => 7,
  'Ana' => 9
];

//var_dump(array_diff($notasBimestre1, $notasBimestre2)); // Leva em consideração o valor ou seja a nota
var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); // Leva em consideração a chave ou seja o aluno
//var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2)); // Leva em consideração a chave e o valor ou seja os dois
