<?php
 $string="Estamos dando nuestros primeros
 pasos en programación utilizando el lenguaje php";
echo strlen($string);
$buscar = "os";

$pos=strpos($string, $buscar);

if($pos===false){
    echo "no se ha encontrado ".$bucar;
}else
echo "La primera ocurrencia de " . $buscar . " en la posicion " . $pos."<br>";

$buscar = "nuestros";
strpos($string,$buscar);
if($pos===false){
    echo "no se ha encontrado ".$bucar;
}else
echo "La primera ocurrencia de " . $buscar . " en la posicion " . $pos."<br>";

 //imprime subcadena lenguaje php 
    $lenguaje= substr($string ,strpos($string,"leng"),strpos($string,"php") );
    echo $lenguaje."<br>";
 //imprime cadena “nuestros primeros pasos”
 
 $lenguaje= substr($string ,strpos($string,"nuestros"),strpos($string,"pasos")-strpos($string,"nuestros"));
    echo $lenguaje."<br>";

$string =str_ireplace('Estamos', 'Estoy', $string);
$string= str_ireplace('nuestros','mi', $string);
echo $string."<br>";

echo strtolower($string)."<br>";
echo strtoupper($string)."<br>";

echo ucwords($string);
?>