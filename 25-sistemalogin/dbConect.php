<?php
//CONECTANDO AO BANCO DE DADOS.
$server  = 'localhost';
$usuario = 'root';
$senha   = 'root';
$banco   = 'sistemalogin';

$conexao = @mysqli_connect($server, $usuario, $senha, $banco);

if(mysqli_connect_error()){
    echo "falha na conexão: ".mysqli_connect_error();
}