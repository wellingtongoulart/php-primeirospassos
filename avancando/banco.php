<?php
require_once ('function.php');


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

//exemplo de saque
$clientes['123542366'] = sacar (
  $clientes['123542366'], 900
);

//exemplo de deposito
$clientes['542354673'] = depositar (
  $clientes['542354673'], 900
);

foreach ($clientes as $cpf => $conta) {
  exibeMensagem("$cpf $conta[titular] $conta[saldo]");
}





//dentro de uma string "" é possível tirar as aspas entre colchetes
// colocando em uma string, o echo já coloca espaços entre as funções
//exemplo sem string: exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
//exemplo de sintaxe complexa (mais indicada): exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
  






