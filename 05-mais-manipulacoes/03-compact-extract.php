<?php

$dados = [
  'nome' => 'Vinicius',
  'nota' => 10,
  'idade' => 24
];

// ['nome' => $nome,  'nota' => $nota, 'idade' => $idade] = $dados;

extract($dados); // Pega a chave do array e tranforma em variaveis
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade')); // Pega os parametros(variaveis) e os tranforma em chave de arrays