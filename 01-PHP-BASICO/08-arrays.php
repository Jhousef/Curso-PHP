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

//Arrays
$carros = ["BMW", 4 => "CORSA", "CAMARO"];
//print_r - Sempre se usa para 
$carros[6] = "fiat";
$carros[] = "porshe";
print_r($carros);

echo "<hr>";

//Count
//count - serve para contar os arrays
$clientes = ["Jhousef", "Bruno", 5 => "Ana"];

$totalClientes = count($clientes);
echo $totalClientes;

echo "<hr>";

//foreach
foreach ($clientes as $valor) {
    echo $valor . '<br>';
}

echo "<hr>";

//Arrays associativos
$pessoa = ["nome" => "Jhousef", "idade" => 21, "altura" => 1.92];
$pessoa["sobrenome"] = "Muniz";

foreach ($pessoa as $indice => $valor) {
    echo $indice . ': ' . $valor . '<br>';
}

echo '<hr>';

//Arrays multidimensionais
$times = [
    "carioca" => ["campeão" => "flamengo", "vice" => "fluminense", "lenterninha" => "vasco"],
    "paulistão" => ["lanterninha" => "santos", "campeão" => "são paulo", "vice" => "palmeiras"],
    "maranhense" => ["vice" => "moto clube", "campeão" => "sampaio", "lanterninha" => "tuntum"]
];

//maneira de mostrar o resultado todo com 1 foreach dentro do outro.
//pra mostrar arrays multidimensionais
foreach($times as $times_k => $times_v){
    echo "exibindo resultado do campeonato $times_k \n<br>";
    foreach($times_v as $valor_k => $valor_v){
        echo "\t$valor_k, $valor_v \n<br>";
    }
}

echo '<hr>';
foreach ($times["carioca"] as $indice => $valor) {
    echo $indice . ": " . $valor . "<br>";
}
echo "<br>";
foreach ($times["paulistão"] as $indice => $valor) {
    echo $indice . ": " . $valor . "<br>";
}
echo "<br>";
foreach ($times["maranhense"] as $indices => $valores) {
    echo $indices . ": " . $valores . "<br>";
}

echo "<br>";

$pessoas = ['João', 'Luis', 'Ana'];

$vendas = [40, 30, 80];

foreach ($pessoas as $i => $pessoa) {
    echo "$pessoa vendeu $vendas[$i] \n<br>";
}
echo "<hr>";
