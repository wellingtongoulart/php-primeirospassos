<?php
//usando índices//

$clientes = [
 123542366 => [
  'titular' => 'Wellington', 
  'saldo' => 11000
], 
 123433456 => [
  'titular' => 'Vinicius',
  'saldo' => 12999
], 
 542354673 => [
  'titular' => 'Erick',
  'saldo' => 50900
], 
 123435623 => [
  'titular' => 'Alan', 
  'saldo' => 500
]
];

$clientes[32541232] = [ //colocando um novo cliente pelo indice//
  'titular' => 'Henrique', 
  'saldo' => 2000
];

foreach ($clientes as $cpf => $conta) {
  echo $conta['titular'] . PHP_EOL;
} //grupo complexo de arrays dentro de variáveis com índices - atenção para o $conta//
//atenção cpf seta conta//