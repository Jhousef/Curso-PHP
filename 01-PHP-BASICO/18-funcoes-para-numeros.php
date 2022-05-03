<?php
// Funções para numeros
// number_format - formata um número com milhares agrupados.
$nmr = 44411153.22;
$db   = number_format($nmr, 2, ',', '.');
echo $db;
echo '<hr>';

// round - arredonda os valores.
echo round(3.5);
echo '<hr>';

// ceil - arredonda valores pra cima.
echo ceil(6.1);
echo '<hr>';

// floor - arredonda valores pra baixo.
echo floor(5.9);
echo '<hr>';

// rand - Gera um inteiro aleatório.
echo rand(1,100);