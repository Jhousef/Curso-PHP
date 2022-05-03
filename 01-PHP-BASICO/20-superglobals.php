<?php
// Superglobais
// $GLOBALS - Acessa variavéis globais de qualquer lugar do script php.
$x = 10; 
$y = 15;

function somar(){
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

somar();
echo '<hr>';

// $_SERVER - informações do servidor e do ambiente de execução.
echo $_SERVER['PHP_SELF'].'<br>';
echo $_SERVER['SERVER_NAME'].'<br>';
echo $_SERVER['SCRIPT_FILENAME'].'<br>';
echo $_SERVER['DOCUMENT_ROOT'].'<br>';
echo $_SERVER['SERVER_PORT'].'<br>';
echo $_SERVER['REMOTE_ADDR'].'<br>';
// pra mais informações consultar o documentario do PHP.
echo '<hr>';

// $_REQUESTE - variavéis de solicitação HTTP.
