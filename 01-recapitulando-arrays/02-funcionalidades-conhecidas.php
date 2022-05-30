<?php

// $array = array();
$array = [
  1 => 'um',
  2 => 'dois',
  3 => 'tres'
];

$contador = 0;
foreach ($array as $numeral => $nomeNumero) {
  echo "$numeral em portugues é: $nomeNumero" . PHP_EOL;
  $contador++;
}

//echo "Total: $contador" . PHP_EOL;

echo "Total: " . count($array) . PHP_EOL; // Mias usado hoje em dia
echo "Total: " . sizeof($array) . PHP_EOL; // Faz a msm coisa que o count
