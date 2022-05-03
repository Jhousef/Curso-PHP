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
//For
for($i = 0;$i <= 10;$i++){
    echo '1 x '.$i.' = '.($i*1).'<br>';
}
echo '<hr>';

$pescadores = ['João', 'Maria', 'Diego'];

foreach($pescadores as $pes_ind => $nome_v){
    echo $pes_ind.' pescador '.$nome_v.'<br>';
}