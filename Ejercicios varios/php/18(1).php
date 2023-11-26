<?php
if(isset($_GET["number"]))
    $n=$_GET["number"];
    else
    $n=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="RandNum" method="get" action="18(1).php">
        <input type="number" name="number" id="num1" value="<?=$n  ?>">
        <input type="submit" name="BtnEnviar" id="Enviar">
    </form>
    <?php
$num=rand(1,100);
$par=0;
$sum=0;
if($n!=""){
while($par<$_GET["number"]){
    if($par%2==0){
        $sum+=$par;
    }
    $par++;
}
echo $n."<br/>".$sum;}
?>
</body>
</html>

