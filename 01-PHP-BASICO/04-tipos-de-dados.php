<?php
//Tipos de dados escalares
//string
$nome = "jhousef";
//var_dump($nome);
if(is_string($nome)){
    echo "é uma string";
} else {
    echo "não é uma string";
}

echo "<hr>";

//inteiro
$pessoas = 25;

if(is_int($pessoas)){
    echo "é um inteiro";
}   else {
        echo "não é um inteiro";
    }

    echo "<hr>";

//Float
$altura = 124.5;

if(is_float($altura)){
    echo "é float";
} else {
    echo "não é float";
}

echo "<hr>";

//Boolean
$admin = true;
var_dump($admin);
echo "<br>";
if(is_bool($admin)){
    echo "é booleano";
} else {
    echo "não pe booleano";
}

echo "<hr>";

//Tipos de dados compostos
//array
$carros = array("siena","celta","camaro","fiat", 10, 8.5, true);
var_dump($carros);
echo "<br>";
if(is_array($carros)){
    echo "é um array";
} else {
    echo "não é um array";
}

echo "<hr>";

//objeto
class aluno{
    public $nome_do_aluno;
    public function atribuirNomeDoAluno($nome_do_aluno){
        $this-> $nome_do_aluno = $nome_do_aluno;
    }
    
    public $idade;
    public function atribuirIdade($idade){
        $this->$idade = $idade;
    }
    
}
$aluno = new aluno();
$aluno->atribuirNomeDoAluno("jhousef");
var_dump($aluno);

echo "<hr>";

$aluno->atribuirIdade(31);
var_dump($aluno);
echo "<br>";
if(is_object($aluno)){
    echo "É um objeto";
} else {
    echo "não é um objeto";
}

echo '<hr>';

//Tipo de dados Especias

$cidade = NULL;
var_dump($cidade);

echo "<hr>";


