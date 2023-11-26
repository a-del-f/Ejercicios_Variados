<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$aEquipos = array(
"Real Madrid" => array("puntos"=>87,"posicion"=>1),
"Villareal" => array("puntos"=>60,"posicion"=>5),
"Celta de Vigo" => array("puntos"=>36,"posicion"=>17),
"Ath. Bilbao" => array("puntos"=>51,"posicion"=>11),
"RCD Espanyol" => array("puntos"=>25,"posicion"=>20),
"Leganés" => array("puntos"=>33,"posicion"=>18),
"Atlético de Madrid" => array("puntos"=>70,"posicion"=>3),
"Getafe" => array("puntos"=>54,"posicion"=>8),
"Alavés" => array("puntos"=>37,"posicion"=>16),
"Sevilla" => array("puntos"=>70,"posicion"=>4),
"Barcelona" => array("puntos"=>82,"posicion"=>2),
"Real Sociedad" => array("puntos"=>56,"posicion"=>6),
"Osasuna" => array("puntos"=>52,"posicion"=>10),
"Granada" => array("puntos"=>56,"posicion"=>7),
"Valencia C.F" => array("puntos"=>53,"posicion"=>9),
"Levante" => array("puntos"=>49,"posicion"=>12),
"Valladolid" => array("puntos"=>42,"posicion"=>13),
"Betis" => array("puntos"=>39,"posicion"=>15),
"RCD MAllorca" => array("puntos"=>25,"posicion"=>19),
"Eibar" => array("puntos"=>42,"posicion"=>14)
);
$cont=0;

 $i=0;
foreach($aEquipos as $clave => $valor ){
   $Equipos[$i]=$aEquipos[$clave]["posicion"];
   
        $i++;

} 
array_multisort($Equipos,SORT_ASC,$aEquipos);
  
      foreach($aEquipos as $clave => $valor ){
      if($valor["posicion"]<=3) {
        echo  $clave ." Puntos: ".$valor["puntos"]." Posicion :". $valor["posicion"] ;
        echo "</br>";}}
?>
</body>
</html>

