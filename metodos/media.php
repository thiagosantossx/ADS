<?php

//cálculo media

$nota1 = 9;
$nota2 = 8.4;
$nota3 = 9;
$nota4 = 5;

//declaração do método

function media($a1, $a2, $a3, $a4){
    echo "Média final: $media";
}

function media2($a1, $a2, $a3, $a4){
     $notas = array($a1,$a2,$a3,$a4);
     $soma = array_sum($notas);
    $media = $soma / sizeof($notas);
echo "Média final: $media";
}

//chamada do método

media2($nota1, $nota2, $nota3, $nota4);