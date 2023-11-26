<?php
$random =rand(1,100);
function valor($random){
    if($random<50){
        echo $random."Es menor que 50";
    }
    else if($random>50){
        echo $random."Es mayor que 50";
    }
    else
        echo $random. "Es igual a 50";
}
?>