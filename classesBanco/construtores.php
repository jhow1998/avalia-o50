<?php

include '../classesBanco/Pessoa.class.php';
include '../classesBanco/Conta.class.php';


// criação objeto $ carlos 

$carlos = new Pessoa(10,'joseph robert',1.85,25,"14/05/1976","Ensino Medio",650.00);

echo "Manipulando o Objeto {$carlos->nome} <br>";
echo "{$carlos->nome} é formado em: {$carlos->escolaridade}<br>";
$carlos->formar('Programção Web');
echo "{$carlos->nome} é formado em: {$carlos->escolaridade}<br>";

echo "{$carlos->nome} possui {$carlos->idade} anos <br>";
$carlos->envelhecer(2);
echo "{$carlos->nome} possui {$carlos->idade} anos<br><br><br> ";



$conta_carlos = new Conta(6677,"CC.12345.56","10/07/02",$carlos,9876,567.89);

echo "Manipulando a conta de:{$conta_carlos->titula->nome}:<br>";

echo "O saldo atual e R/$ {$conta_carlos->obterSaldo()}<br>";
$conta_carlos->depositar(20);
echo"O saldo atual e R/$ {$conta_carlos->obterSaldo()}<br>";
$conta_carlos->retirar(10);
echo"O saldo atual e R/$ {$conta_carlos->obterSaldo()}<br>";

?>