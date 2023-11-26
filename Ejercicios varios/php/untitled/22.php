<?php 
$empleados= array("CE".rand(1111,9999)=>array("Nombre"=>"AAA","Edad"=>11,"Salario"=>500));
function Salario($nombre,$edad,$salario){
    if( 1000<=$salario<=2000){
        if($edad>45){
            $salario=$salario+($salario*0.04);
        }
        else{
            $salario=$salario+($salario*0.1);

        }
    }else if($salario<1000){
        if($edad<30){
            $salario=1500;
        }
        if(30<=$edad<=40){}
    }
}
?>