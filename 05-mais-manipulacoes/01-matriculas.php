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

$alunos2022 = [...$alunos2021, 'Carlos', ...$novosAlunos];
array_push($alunos2022, 'Alice', 'Bob', 'Charlie'); // Adiciona ao final do array
// $alunos2022[] = 'Luiz'; // Adiciona um unico elemento ao final do Array
// array_unshift($alunos2022, 'Stephane', 'Roberto'); // Adiciona no inicio do array
// echo array_shift($alunos2022) . PHP_EOL; // Pega o primeiro elemento do array
// echo array_pop($alunos2022) . PHP_EOL; // Pega o ultimo elemento do array
var_dump($alunos2022);
