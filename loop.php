<?php
$x = 3;     //Varivael x = numero 1
$y = 4;     //Variavel y = numero 2
$res = 0;   //Variavel res guarda o resultado da multiplicação
//execultando o for para fazer uma multiplicação

for ($i = 0; $i < $y; $i++) {
    $res += $x;
}
//Exibindo o resultado
echo "O resultado da Multipliação e: " . $res;
