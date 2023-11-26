<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $elementos=array(); 
     $cont=0;
    for($i=0;$i<20;$i++){
    $num=rand(1,30);
    $val=1;
    $boolean=true;
  
        foreach($elementos as $clave=>$valor){
    if( $num ==$clave  ){$valor;
        //echo "antes".$clave.$elementos[$num]."<br/>";
        $valor=$valor+1;
        $val=$valor;
       $elementos[$num]=$valor;
     //  echo "despues".$clave.$elementos[$num]."<br/>";
       
        $boolean=false;
        $cont ++;
        $i=$i-1;
        
       
        
    }
    else $boolean=true;

}
    if($boolean==true){ $elementos[$num]=  $val;    
   }} 
   
  print_r($elementos);
   echo $cont;


    krsort($elementos);
 ?>
        <table border="1" style="border-collapse: collapse;">
        <tr><?php foreach($elementos as $clave1 => $valor1){?>
            <?php if($clave1%2==0){ ?>
            <td style="background-color: green;"><?php echo $clave1;?></td>
            <?php } else if($clave1%2!=0){ ?>
            <td style="background-color: red;"><?php echo $clave1;?></td><?php }} ?>
        </tr>
        <tr><?php foreach($elementos as $clave2 => $valor2){?>
                <td><?php echo $valor2 ;?></td><?php } ?>
            </tr>
        </table>
    
</body>
</html>