<?php
if(isset($_REQUEST["nom"])&&isset($_REQUEST["ape"])&&isset($_REQUEST["correo"])&&isset($_REQUEST["telefono"])){
    $servername="localhost";
    $username="root";
    $password="";
    $name="myBDPDO";
    $sql="Insert into alumnos(nombre,apellidos,correo,telefono)
    VALUES (:name, :ape,:mail, :num)";
    
    echo "genero sql";
    try{
        $conn=new PDO("mysql:host=$servername,bdname=$name",$username);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "genero conexiones";

        $stmt=$conn->prepare($sql);
           echo "Genero sql";
        $nam=$_REQUEST["nam"];
        $ape=$_REQUEST["ape"];
        $mail=$_REQUEST["mail"];
        $num=$_REQUEST["num"];
        echo "genero variables";

        $stmt->bindParam(':nam',$nam);
        $stmt->bindParam(':ape',$ape);
        $stmt->bindParam(':mail',$mail);
        $stmt->bindParam(':num',$num);
        echo "Connected";
        $stmt->execute();
    }catch(PDOException $e){
            echo $sql."<br>". $e->getMessage();
    }
}   
?>