<?php 

$color =[1=>"azul",2=>"rojo",3=>"verde",4=>"verde",5=>"rosa",6=>"naranja"];

foreach($color as $clave => $valor){
    if($valor=="rosa"){
        unset($color[$valor]);
    }
    echo $clave. "=>".$valor;
}
?>