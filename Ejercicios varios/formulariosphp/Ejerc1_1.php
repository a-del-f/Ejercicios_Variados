<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="Ejerc1.php">
        <label>¿Cuantas veces?</label>
        <input type="integer" name="num" id="num">
        <input type="submit" name="btn" id="btnEnviar">
    </form>

    <?php 
    if(isset($_POST["num"])){
        
         for($i=0;$i<  $num=$_POST["num"] ; $i++){
            ?><p>Los bucles son faciles</p><?php
          
         }
         ?><p>Se acabo</p> <?php
    }
    ?>

</body>

</html>