<?php
// SESSÕES

//SEMPRE COLOCAR session_start(); NO INÍCO DE TODA PÁGINA DE SESSÃO.
session_start();

//$_SESSION[] - CRIA UMA SESSÃO.
$_SESSION['cor']    = 'verde';
$_SESSION['carro']  = 'veloster';

# A FUNÇÃO session_id() CRIA UM ID PARA SESSION
echo $_SESSION['cor'].'<br>'.$_SESSION['carro'].'<br>'.session_id();