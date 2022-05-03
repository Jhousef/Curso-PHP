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

<?php
// Funções para string
/*
strtoupper - tranforma letra minusculas em maiusculas.
strtolower - tranforma letra maiusculas em minusculas.
substr - Retorna parte de uma string
str_pad - Preencher uma string até um certo comprimento com outra string
str_repeat - repetição de uma string 
strlen - retorna o comprimento de uma string
str_replace - Substitui todas as ocorrências da string de pesquisa pela string de substituição
strpos - Retorna a posião de uma palavra em um texto
*/

//strtoupper
$str = 'jhou';
$strM = strtoupper($str);
echo $strM;
echo '<hr>';

//strtolower
$str = 'JHOUSEF';
$novaStr = strtolower($str);
echo $novaStr;
echo '<hr>';

//substr 
$str = 'jhousef muniz';
echo substr($str, 3, 7);
echo '<hr>';

//str_pad
$str = 'mundo';
// STR_PAD_BOTH - vai destribuir pro dois lados
$novaStr = str_pad($str, 11, '#', STR_PAD_BOTH);
echo $novaStr;
echo '<br>';
// STR_PAD_LEFT - vai destribuir para esquerda
$novaStr = str_pad($str, 11, '#', STR_PAD_LEFT);
echo $novaStr;
echo '<br>';
// STR_PAD_RIGHT - vai destribuir para direita
$novaStr = str_pad($str, 11, '#', STR_PAD_RIGHT);
echo $novaStr;
echo '<hr>';

//str_repeat
$stri = str_repeat('Jhousef é top '.'<br>', 10);
echo $stri;
echo '<hr>';

//strlen
$msg = strlen('olá mundo');
echo $msg;
echo '<hr>';

//str_replace
$texto = 'a seleção Argentina vai ser campeã da copa mundial de 2022';

$textoUpdate = str_replace('Argentina', 'Brasil', $texto);
echo $textoUpdate;
echo '<hr>';

//strpos
$posTexto = strpos($texto, 'mundial');
echo $posTexto;