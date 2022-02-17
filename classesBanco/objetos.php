<?php

include '../classesBanco/Pessoa.class.php';
include '../classesBanco/Conta.class.php';

// criação do objeto $carlos

$carlos = new Pessoa;
$carlos->codigo = 10;
$carlos->nome = 'Carlos da Silva';
$carlos->altura = 1.85;
$carlos->idade = 40;
$carlos->nascimento = '10/04/1976';
$carlos->escolaridade = 'Ensino Medio';

echo "manipulando o objeto $carlos->nome <br> ";

echo "{$carlos->nome} é formado em: {$carlos->escolaridade}<br>";
$carlos->formar('Tecnico em Eletricidade');
echo "{$carlos->nome} é formado em: {$carlos->escolaridade}<br>";


echo "{$carlos->nome} possui {$carlos->idade} anos <br>";
$carlos->envelhecer(43);
echo "{$carlos->nome} possui {$carlos->idade} anos<br><br><br> ";


//criar conta do $carlos

$conta_carlos = new Conta;
$conta_carlos->agencia = 667;
$conta_carlos->codigo ="CC.12345.69";
$conta_carlos->dataDeCriacao = "10/07/02";
$conta_carlos->titular = $carlos;
$conta_carlos->senha = 9876;
$conta_carlos->saldo = 567.89;
$conta_carlos->cancelada = false;

echo 'Manipulando a conta bancaria <br>';
echo "A conta de: {$conta_carlos->titular->nome}<br> ";
echo "O Saldo Atual é : R/$ {$conta_carlos->obterSaldo()}<br> ";

$conta_carlos->depositar(40);
echo "O saldo atual é R/$ {$conta_carlos->obterSaldo()}<br>";

$conta_carlos->retirar(15);
echo "O saldo atual é R/$ {$conta_carlos->obterSaldo()}<br>";





?>