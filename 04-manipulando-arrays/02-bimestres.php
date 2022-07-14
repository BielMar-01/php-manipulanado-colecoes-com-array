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
  'Roberto' => 7,
  'Ana' => 9
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);


//var_dump(array_keys($alunosFaltantes)); // Pega um array e retorna sua chaves que nesse caso é o nome
//var_dump(array_values($alunosFaltantes)); // Pega um array e retorna seu valor que nesse caso é a nota
var_dump(array_combine($notasAlunos, $nomesAlunos)); // Combina valores com chaves invertendo eles
var_dump(array_flip($alunosFaltantes)); // Inverte os dados de chave e valores
//var_dump((array_combine($notasAlunos, $notasBimestre1))); // Terá um erro pois no array_combine é preciso que os arrays sejam do mesmo tamanho
