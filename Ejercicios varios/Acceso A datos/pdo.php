<?php 
$servername="localhost:3333";
$username="root";
$password="";
$name="myBDPDO";
try{

    //establecer conexión
$conn=new PDO("mysql:host=$servername; dbname=mybdpdo",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connected succesfully";

$resultado=$conn->query("Select * From alumnos");
//print_r($resultado);
while($row=$resultado->fetch()){
   echo $row["NOMBRE"];
}
}catch(PDOException $e){
        echo $sql."<br>". $e->getMessage();
}

?>