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
$carros = array("Gol","Uno","Camaro", 12, 20.6, true);
var_dump($carros);

// object
class Cliente {
    public $nome;
    public function atribuirNome($nome) {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Rodrigo");
var_dump($cliente);

if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";

/********** Especiais ************/
// NULL
$cidade = NULL;
var_dump($cidade);

// Resource
