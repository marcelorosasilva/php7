<?php

# Inicio a Variáveis
$variavel = "Inicio a Variaveis no PHP...!";

echo $variavel;
echo "<br>";
$nome = 'Marcelo';
echo $nome;
echo "<br/>";
//Destroi a Varivel

//unset($variavel, $nome);

if (isset($nome, $variavel)) {
	echo " $nome Esta variavel ainda esta ativa";
} else {
	echo " $nome Esta variavel não mais existe";
}

//$kard = $_GET['variable']
$ip = $_SERVER["REMOTE_ADDR"];
echo "<br>";
echo "Endereço do servidor : " . $ip;

$idade = 25;
$altura = 1.75;
$letra = 'a';
$strings = "767,787,706-00";
$listas = ["a", "b", "c"];
