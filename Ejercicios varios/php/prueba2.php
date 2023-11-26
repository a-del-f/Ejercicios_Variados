<?php

$array=["Pepe","Juan",8];

echo $array[0];

$array[9]="pedro";
echo $array[9];

$paises=array("España"=>"Madrid",
                "Suiza"=>"Lausanne",
                "Irlanda"=>"Dublin");

    //echo "<br>Ciudad:". $paises["Suiza"];

    foreach($paises as $clave => $valor){
        echo "Clave :". $clave ."Valor:".$valor . "<br>";
    }
echo "------------------------------------<br>";
$paises2=array("España"=> array( "Toledo"=>"Ofi1","Salamanca"=>"Ofi2"),
            "Suiza"=>array("Lausanne"=>"Ofi3", "Zurich"=>"Ofi4"),
            "Irlanda"=>array("Dublin"=>"Ofi5", "Cork"=>"Ofi6"));

foreach($paises2 as $clave => $valor){
        echo "$clave" ;
        foreach($valor as $city => $ofi ){
            echo "$city=$ofi<br>";
        }
    }
?>