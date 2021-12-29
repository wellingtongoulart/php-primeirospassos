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




//dentro de uma string "" é possível tirar as aspas entre colchetes
// colocando em uma string, o echo já coloca espaços entre as funções
//exemplo sem string: exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
//exemplo de sintaxe complexa (mais indicada): exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
// exibeMensagem("$cpf $conta[titular] $conta[saldo]");
// na lista ao inves de usar list pode só colocar os indices e as novas classes entre colchete, e dá o valor para eles da variável mãe
//unset exclui uma variavel, só colocar a variavel e o indice
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Contas Correntes</h1>
  <dl>
"<!--sintaxe php dentro do html - atenção -->
    <?php foreach($clientes as $cpf => $conta){ ?>
      <dt>
        <h3>
          <?= $conta['titular']; ?> - <?= $cpf; ?>
        </h3>
      </dt>
      <dd>
      Saldo: <?= $conta['saldo']; ?>
      </dd>
    <?php } ?>
  </dl>
</body>
</html>












