<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $servername="localhost:3333";
    $username="root";
    $password="";
    $sql="Select * from alumnos;";
    try
     {$conn=new PDO("mysql:host=$servername; dbname=mydbpdo",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connected succesfully";
    
    $stmt=$conn->prepare($sql);
    $archivo =fopen("fichero.csv","r+b");
    echo "Continue";$stmt->execute();

    while($row= $stmt->fetch(PDO::FETCH_ASSOC)){
        $text= "".$row["NOMBRE"]." ".$row["APELLIDOS"]." ".$row["CORREO"]." ".$row["TELEFONO"]." ;";
        fputs($archivo,$text."\r");
        echo "Continue";
    }
    echo "<br> Leer";
    $lector=fopen("fichero.csv","r+b");
    while(feof($lector)==false){
   echo fgets($lector)."\r";
    }
    }catch(PDOException $e){
            echo $sql."<br>". $e->getMessage();
    }
    ?>
</body>
</html>