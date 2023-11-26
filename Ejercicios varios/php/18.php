

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="RandNum" method="get" action="18.php">
        <input type="number" name="number" id="num1" value="<?php echo $_GET['number']  ?>">
        <input type="submit" name="BtnEnviar" id="Enviar">
       
    </form>
    <?php
$num=rand(1,100);
$par=0;
$sum=0;
if(isset($_GET["number"])){
while($par<$_GET["number"]){
    if($par%2==0){
        $sum+=$par;
    }
    $par++;
}

echo $_GET["number"]."<br/>".$sum;}
?>
</body>
</html>

