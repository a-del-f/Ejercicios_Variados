<?php 
$servername="localhost:3333";
$username="root";
$password="";
$name="myBDPDO";
$sql="Insert into alumnos(nombre,apellidos,correo,telefono)
values(:nombre,:apellido,:correo,:telefono)";
try{

    //establecer conexión
$conn=new PDO("mysql:host=$servername; dbname=mybdpdo",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connected succesfully";

$stmt=$conn->prepare("Insert into alumnos(nombre,apellidos,correo,telefono)
VALUES ('Jane', 'Doe',' ane@example.com', 111111111)");

//$stmt->bindParam(":nombre",$nombre);
//$stmt->bindParam(":apellido",$apellido);
//$stmt->bindParam(":correo",$correo);
//$stmt->bindParam(":telefono",$telefono);
//insert a row
$nombre="Jane";
$apellido="Doe";
$correo="jane@example.com";
$telefono=111111111;

while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row["NOMBRE"]." ".$row["APELLIDOS"]." ".$row["CORREO"]." ".$row["TELEFONO"];
    echo "introducido";
 }
 
$stmt->execute();
//print_r($resultado);

}catch(PDOException $e){
        echo $sql."<br>". $e->getMessage();
}

?>