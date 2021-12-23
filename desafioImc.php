<?php

/*preciso que a pessoa informe a altura e peso dela
dividir os valores informados e alocar na variavel $imc
dividir o $peso pela $altura ao quadrado */



$peso = 52;
$altura = 1.90;
$imc = $peso / ($altura ** 2);
if ($imc < 20){
  echo "O seu IMC é $imc e está abaixo do esperado";
} elseif ($imc > 20){
  echo "O seu IMC é $imc está acima do esperado";
} else {
  echo "O seu IMC é $imc está com o valor esperado";
}