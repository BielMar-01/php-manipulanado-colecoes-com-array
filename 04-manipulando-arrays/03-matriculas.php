<?php

$alunos2021 = [
  0 => 'Vinicius',
  1 => 'João',
  2 => 'Maria',
  3 => 'Roberto',
  4 => 'Ana'
];

$novosAlunos = [
  5 => 'Patricia',
  6 => 'Nico',
  7 => 'Kilderson',
  8 => 'Daiane'
];

$alunos2022 = array_merge($alunos2021, $novosAlunos); // Itera sempre ai final subistiruindo as chaves
//$alunos2022 = $alunos2021 + $novosAlunos; // Não pode ter a mesma chave
var_dump($alunos2022);
