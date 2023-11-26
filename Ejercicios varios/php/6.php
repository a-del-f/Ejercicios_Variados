<?php
$num=-1;
if(is_integer($num)==1){
    if($num%2==0){
        echo "Es par <br/>" ;
    }
   else if($num%2!=0){
        echo "Es impar <br/>";
    }
    if($num<0){
        echo "Es un numero negativo";
    }
}


?>