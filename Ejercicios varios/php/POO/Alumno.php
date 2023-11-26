
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include "Persona.php";
class Alumno extends Persona{
    private $ies;
     private $nota;
    const CICLO="DAW";
      static $id=408;
    function __construct($nom,$ape){
        parent::__construct($nom,$ape) ;
       
        $this->ies = "CE";
        $this->nota = 9;
        
    }
    function datosAlumno(){
        self::$id++;
 
        $str= "Los datos del Alumno ".$this->nom." ".$this->ape."y pertetence al grado ".self::CICLO;
        $str.="estudia en el IES ". $this->ies. "y tiene una nota de ". $this->nota;
        return $str;
    }
    function getNombre(){
        return $this->nom;
    }
    function setNombre($nom){
        $this->nom=$nom;
    }
    function __set($name, $value){
        /*if($name=="nombre"){
            $this->nombre=$value;
        }
        else if($name=="apellido"){
            $this->nombre=$value;
        }*/
        $this->$name=$value;
    }
    function __get($name){
        /*if($name=="nombre"){
            return $this->nombre;
        }
        if($name=="apellido"){
            return $this->apellido;
        }*/
        return $this->$name;
    }
    function __toString(){
        return "Los datos del Alumno ".$this->nom." ".$this->ape."y pertetence al grado ".self::CICLO;
    }
}


    
?>

    
</ul>
</body>
</html>
