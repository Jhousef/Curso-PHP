<?php

//Escopo de variaveis

//ESCOPO GLOBAL

function exibePais(){
    //ESCOPO LOCAL
    global $pais;
    $pais = "Brasil";
}

exibePais();
echo $pais;

echo "<hr>";

//como acessar as variaveis do ESCOPO GLOBAL
$a = 5;
$b = 5;
$c = 5;

function soma(){
    //ESCOPO LOCAL
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();

echo "<hr>";


//Como fazer um contador de abecedario
for($i = 65; $i <= 150; $i++){
    echo chr($i) . ' | ';
}
