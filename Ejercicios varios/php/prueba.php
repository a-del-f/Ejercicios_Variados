<?php

$listado =array("Junior"=>array("Nombre"=> array("Jesús","Pepe"),
                        "DNI" =>array("1111","2222")),
                        "Senior"=>array("Nombre"=>array("Mamén","Pepi"),
                        "DNI"=>array("3333","4444")));


foreach ($listado as $category => $dato){
    echo "$category";
  

echo"<br>";
    foreach($dato["Nombre"] as $dat=>$nom ){
        
        echo "--$nom";
    echo"<br>";}
        

    }

?>