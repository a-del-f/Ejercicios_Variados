<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $array[0]="playa1.jpg";
    $array[1]="playa2.jpg";
    $array[2]="montaña1.jpg";
    $array[3]="montaña2.jpg";
    $num=rand(0,3);
?>
<img src="<?php echo $array[$num]; ?>" width="500px" alt="foto">
</body>
</html>

