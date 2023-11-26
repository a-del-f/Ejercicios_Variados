<?php 
$num=0;
$prev=0;
$prev1=0;
$cont=0;
echo $num."<br>";
do {
if($num==0){
$num+=1;
}
else{ 
    $prev2=$prev;
  $prev= $num;
 
$num=$prev2+$prev;
 
}

echo $num."<br>";
$cont+=1;

}while($cont<25);   


?>
    