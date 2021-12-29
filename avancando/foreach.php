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

foreach ($clientes as $cpf => $conta) {
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$cpf $titular $saldo");
  }

  //dentro de uma string "" é possível tirar as aspas entre colchetes
// colocando em uma string, o echo já coloca espaços entre as funções
//exemplo sem string: exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
//exemplo de sintaxe complexa (mais indicada): exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
// exibeMensagem("$cpf $conta[titular] $conta[saldo]");
// na lista ao inves de usar list pode só colocar os indices e as novas classes entre colchete, e dá o valor para eles da variável mãe
//unset exclui uma variavel, só colocar a variavel e o indice