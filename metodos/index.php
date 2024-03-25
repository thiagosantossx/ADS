<?php 
//método que recebe parâmetro e tem retorno

function somar($x , $y ){
    return $x + $y;
}

//método que não recebe parâmetro e não tem retorno

function imprimirMeuNome(){
    echo "Thiago Ferreira dos Santos";
}

 //método que recebe parâmetro e NÃO tem retorno

function getPI(){
    return 3.14;
}

//método que recebe parâmetro e NÃO tem retorno

function imprimirAreaCirculo( $raio){
    $area = getPI() * ($raio * $raio);
    echo "<br>Área do círculo com raio $raio é: ".$area;
}

imprimirMeuNome();
$result = somar(5, 10);
echo"<br>Resutado: ".$result;
echo "<hr>Valor do PI: ".getPI();
imprimirAreaCirculo(5);
imprimirAreaCirculo(10);