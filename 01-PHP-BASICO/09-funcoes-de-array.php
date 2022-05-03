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
// is_array - verifica se é um array.
$nomes = ["Jhousef", "Roana", "Dele"];
$nmr = 4;

if(is_array($nomes)){
    echo "é um array.";
} else 
    echo "não é um array";

echo "<hr>";
//in_array - verifica se determinado valor existe em alguma posição do array.
$nomes = ["filho"=>"Jhousef", "irmã"=>"Roana", "irmão"=>"Dele"];
if(in_array("Dele",$nomes)){
    echo "existe";
} else{
    echo "não existe";
}

echo '<hr>';

//array_keys - retorna um novo array com as chaves do array passado como parametros.
$keys = array_keys($nomes);
print_r($keys);
echo '<hr>';

//array_values - retorna um novo array com valores do array passado nos parametos.
$nome = ["irmã"=>"Ana", "filha"=>"Maira", "tia"=>"Rosa"];
print_r($nome);
echo '<br>';
$valores = array_values($nome);
print_r($valores);
echo '<hr>';

//array_merge - agrega o conteúdo dos dois arrays.
$carros = ["BMW", "Corsa", "Toyota"];
$motos = ["Titan", "Fan", "Yamaha"];

$all_veiculos = array_merge($carros, $motos);
print_r($all_veiculos);
echo '<hr>';

//array_pop - exclui a ultima posição do array.
$motos = ["Titan", "Fan", "Yamaha"];
print_r($motos);
echo '<br>';
// echo na função pra mostrar a posição do array que foi exluida.
echo 'a posição excluida foi '.array_pop($motos);
echo '<br>';
print_r($motos);
echo '<hr>';

//array_shift - exclui a primeira posição do array.
$nomes = ["Jhousef", "Roana", "Dele"];
print_r($nomes);
echo '<br>';
echo 'a posição excluida foi '.array_shift($nomes);
echo '<br>';
print_r($nomes);
echo '<hr>';

//unshift - adiciona um ou mais elementos no inicio do array.
$carros = ["BMW", "Corsa", "Toyota"];
print_r($carros);
echo '<br>';
array_unshift($carros, 'Porshe');
print_r($carros);
echo '<hr>';

//array_push - adiciona um ou mais elementos no final do array.
$frutas = ['goiaba', 'maça', 'pera', 'uva'];
print_r($frutas);
echo '<br>';
array_push($frutas, 'melancia', 'acerola');
print_r($frutas);
echo '<hr>';

//array_combine - mescla os dois arrays passados nos parametros.
$comidas = ['cupin', 'capim', 'carne'];

$nomeAnimais = ['tatu', 'boi', 'cachorro'];

$animais = array_combine($nomeAnimais, $comidas);
print_r($animais);

echo '<hr>';

//array_sum - calcula a soma dos elementos de um array.
$soma = [5,10,5];

echo 'o resultado da soma do array é '.array_sum($soma);
echo '<hr>';

//explode - transforma string em array
$data = "21/06/2000";
print_r($data);
echo '<br>';
$arrData = explode('/', $data);
print_r($arrData);
echo '<hr>';

//implode - tranforma array em string.
$frutas = ['cajú', 'melancia', 'pera'];
print_r($frutas);
echo '<br>';
$frutasString = implode(', ', $frutas);
echo $frutasString;