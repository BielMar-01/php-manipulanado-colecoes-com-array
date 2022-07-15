<?php

//$dados = ['Vinicius', 10, 24];

$dados = [
  'nome' => 'Vinicius',
  'nota' => 10,
  'idade' => 24
];

// $nome = $dados[0];
// $nota = $dados[1];
// $idade = $dados[2];

// list($nome, $nota, $idade) = $dados;
['nome' => $nome,  'nota' => $nota, 'idade' => $idade] = $dados;
// [$nome, $nota, $idade] = $dados; // Sintaxe mais recente
var_dump($nome, $nota, $idade);
