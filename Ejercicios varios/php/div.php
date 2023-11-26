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
   function dividir(){
    global $valor1;
    global $valor2;
    $div=$valor1/$valor2;
    $modulo=$valor1%$valor2;
    echo"División:". $div;
    echo "<br>";
    echo "Modulo:".$modulo;
   }
   ?>
</body>
</html>