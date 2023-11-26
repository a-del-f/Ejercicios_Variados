<?php
for($r=0;$r<4;$r++){
for($i=0;$i<3;$i++)
            {
                $array[$r][$i]=rand(10,50);
                echo $array[$r][$i]."| " ;
            }
        echo "<br>";
}
$min=$array[0][0];
$max=$array[0][0];
for($r=0;$r<4;$r++){
    for($i=0;$i<3;$i++){
        if($min>$array[$r][$i]){
            $min=$array[$r][$i];
        }
        if($max<$array[$r][$i]){
            $max=$array[$r][$i];
        }

    }}
    echo $min." ".$max."<br>";
    $valor=0;
    for($r=0;$r<4;$r++){
        for($i=0;$i<3;$i++){
            $valor=$valor+$array[$r][$i];
        }}
        $valor=$valor/12;
        echo $valor."<br>";

        echo $array[0][0]."<br>"."--".$array[1][1]."<br>"."----".$array[2][2]."<br>";
        echo $array[0][0]."<br>". $array[1][0]."<br>". $array[2][0]."<br>". $array[3][0]."<br>";
?>