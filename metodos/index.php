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
if(isset($_GET["x"])){
    $v1 = $_GET["x"];
}else{
    $v1 = 0;
}

if(isset( $_GET["y"]))
$v2 = $_GET["y"];
else
$v2 = 0;

isset($_GET["r"]) ? $raio =$_GET["r"] : $raio = 0;

$result = somar( $v1, $v2);
//$v1 = $_GET["x"];
//$v2 = $_GET["y"];
//$raio = $_GET["r"];

//$result = somar( 5.1, 10.0);

echo"<br>Resutado: ".$result;
echo "<hr>Valor do PI: ".getPI();
imprimirAreaCirculo($raio);
imprimirAreaCirculo(10);