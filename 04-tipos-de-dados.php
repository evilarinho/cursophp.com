<?php
/********* Escalares **********/
// string
// $nome = "Olá mundo";
$nome = 123;
var_dump($nome);
echo "<br>";
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<br>";
echo "<hr>";
// int
$idade = 10;
var_dump($idade);
echo "<br>";
if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";

// float
$altura = 1.77;
var_dump($altura);
echo "<br>";
if(is_float($altura)):
    echo "É um float";
else:
    echo "Não é float";
endif;
echo "<hr>";
// boolean
// $admin = false;
$admin = true;
var_dump($admin);
echo "<br>";
if(is_bool($admin)):
    echo "É um booleano";
else:
    echo "Não é booleano";
endif;
echo "<hr>";

/***************** Compostos ******************/
