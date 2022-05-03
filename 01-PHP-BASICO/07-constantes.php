 <?php 
//Constante

define("NOME", "Jhousef Muniz");
define("IDADE", 21);
define("CASADO", false);
define("ALTURA", 1.89);

echo 'Meu nome é '.NOME.' e minha idade é '.IDADE;
echo "<br>";
echo 'a minha altura é '.ALTURA;

echo '<hr>';

//CONSTANTES JÁ SÃO GLOBAIS
define("APELIDO", "Jhow");

function mostrarApelido(){
    echo APELIDO;
}

echo mostrarApelido(); 

echo "<hr>";

//CONSTATES DE TIPO ARRAY
define("TIMES", ["Flamengo", "Santos", "Goias"]);
var_dump(TIMES);
echo "<br>";
echo TIMES[0];






