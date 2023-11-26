<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    include "Alumno.php"; 
$alumno=new Alumno("Paco","Pérez");
   

   echo "<br>----------------------------<br>";

   echo "Soy el alumno".$alumno->nom;
   echo "<br>----------------------------<br>";
   
   echo "Soy del ciclo". Alumno::CICLO;
   echo "<br>----------------------------<br>";
  echo $alumno->__get("nom");
  $alumno1=new Alumno("Juan","Ramirez");
  $alumno2=new Alumno("Dani","Fernandez");
   $alumnos=array($alumno,$alumno1,$alumno2);
   $i=1;
   print_r($alumnos);
   
?>
<ul>
   <?php foreach($alumnos as $clave =>$valor){ ?>
   <li><?php echo "Alumno".$i++ ?>
       <ul>
           <li><?php echo $valor->datosAlumno() ?></li>
       </ul>
   </li>
   <?php }?>
   <table border="1">
   <?php foreach($alumnos as $clave =>$valor){ ?>
       <tr>
           <td><?php echo "Alumno".$i++ ?></td>
           <td><?php echo $valor->datosAlumno() ?></td>
       </tr>
       <?php }?>
   </table>
   
</ul>
</body>
</html>