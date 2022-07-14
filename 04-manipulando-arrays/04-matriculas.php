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

$alunos2022 = [...$alunos2021, 'Carlos', ...$novosAlunos]; // Desempacota o array
//Os...é chamado de unpacking
var_dump($alunos2022);

// Spread operator é semelhante ao unpacking 
