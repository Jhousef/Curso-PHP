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
//While e do While
$count = 1;

while($count <= 10){
    echo 'contador é '.$count.'<br>';
    $count++;
}
echo '<hr>';

$i = 1;

do{
    echo 'contador é '.$i.'<br>';
    $i++;
} while($i <= 10);