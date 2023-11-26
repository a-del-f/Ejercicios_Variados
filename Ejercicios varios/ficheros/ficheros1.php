<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $archivo=fopen("fichero1.txt","r+b");
    if(!$archivo){
        echo "Error al abrir el fichero";
    }
    $cadena1=fread($archivo,4);
    echo $cadena1;
    echo"<br>---------------<br>";
    rewind($archivo);
    fwrite($archivo,"no me estais escuchando");
    $cadena2=fread($archivo,filesize("fichero1.txt"));
    echo $cadena2;
    $array=("fichero1.txt");
    print_r($array);


$archivo2=fopen("fichero1.txt","r+b");
    while(feof($archivo2)==false){
   echo  fgets($archivo2). "<br>";
        }    ?>
</body>
</html>