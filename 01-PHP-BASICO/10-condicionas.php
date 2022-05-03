<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

<?php 
// Condicionais IF/ ELSE / ELSEIF
$numero = 31;

if($numero == 20){
    echo 'o numero é 20';
} elseif($numero == 20 || $numero <=30){
    echo 'o número é acima de 20';
} else{
    echo 'número não encontrado';
}
echo '<hr>';

//Operador Ternário

$media = 7;

echo ($media == 8) ? 'a media é 8' : 'a média não é 8';  
echo '<hr>';

//Condicionais Switch
$fruta = 'goiaba';

switch($fruta){
    case('banana'):
        echo 'banana contem muitas vitaminas';
        break;
    case('melão'):
        echo 'rico em vitamina D';
        break;
    case('melancia'):
        echo 'melancia é cheia de vitaminas A e B';
        break;
    default:
        echo 'essa fruta não está disponivél';
}

echo '<hr>';

//Operadores aritmeticos
$a = 10;
$b = 20;
$c = 30;
$d = 5;
$e = 16;

$adicao = $a + $b;
echo 'resultado eh '.$adicao;
echo '<hr>';

$subtracao = $c - $a;
echo 'resultado eh '.$subtracao;
echo '<hr>';

$multiplicacao = $d * $a;
echo 'o resultado é '.$multiplicacao;
echo '<hr>';

$divisao = $c / $a;
echo 'o resultado é '.$divisao;
echo '<hr>';

$modulo = $e % $d;
echo $modulo;
echo '<hr>';

$expo = $a ** $d;
echo $expo;
echo '<hr>';

$res = (5+5+5)/4;

echo ($res == 5) ? 'o resultado é 5' : 'não é 5';