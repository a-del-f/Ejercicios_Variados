<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
  
    function restar (){
        global $valor1;
        global $valor2;        
        $resta =$valor1-$valor2;
       
        echo "Resta:". $resta;
    }
    function mult($valor11,$valor22){
       global  $multi;
       $multi=$valor11*$valor22;
       echo "Multiplicación:". $multi;
    }
    ?>
</head>
<body>
    <?php
    
   $valor1=2;
   $valor2=2;
   $suma=$valor1+$valor2;
    include "div.php";
    echo "Suma:".$suma;
    echo "<br>";
    restar();
    echo "<br>";
    mult($valor1,$valor2);
    echo "<br>";
    dividir();
    ?>
</body>
</html>