<?php

//usando arrays complexos para simular contas correntes//

$conta1 = [
  'titular' => 'Wellington', 
  'saldo' => 11000
];
$conta2 = [
  'titular' => 'Vinicius',
  'saldo' => 12999
];
$conta3 = [
  'titular' => 'Erick',
  'saldo' => 50900
];
$conta4 = [
  'titular' => 'Alan', 
  'saldo' => 500
];


$clientes = [$conta1, $conta2, $conta3, $conta4];

for ($i = 0; $i < count($clientes); $i++){ //aqui ta pegando cada índice automático(0,1,2) da var $clientes//
  echo $clientes[$i]['titular'] . PHP_EOL;
}

//não dá para trabalhar o array de var colocando um índice para cada, somente fazer o loop entre o índice automático. para isso, foreach//

