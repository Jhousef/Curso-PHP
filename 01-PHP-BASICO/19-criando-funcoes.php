<?php
// Criando funções.
function exibirNome($nome){
    echo 'meu nome é '.$nome;
}

exibirNome('Jhousef');

echo '<hr>';

// função pra somar 
function soma($a, $b){
    $res = $a+$b;
    echo 'o resultado é '.$res; 
}

soma(5, 4);
echo '<hr>';

// função para calcular media de Aluno
function somarMedia($aluno, $nota1, $nota2, $nota3, $nota4){
    $res = ($nota1+$nota2+$nota3+$nota4) / 4;
    if($res >= 6){
        echo "$aluno passou com a média ".round($res);
    } else {
        echo "aluno ficou reprovado com a média $res";
    }
}

$arredondaMedia = somarMedia('Jhousef', 8, 7, 9, 10);
