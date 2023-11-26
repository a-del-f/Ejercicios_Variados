
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
    <?php 

        ?>
        <form action="agenda.php">
            <label>Introduce nombre</label>
            <input type="text" name="nombre" id="nombre_id"><br>
            <label>Introduce direccion</label>
            <input type="text" name="direccion" id="nombre_id"><br>
            <label>Introduce telefono</label>
            <input type="text" name="telefono" id="nombre_id"><br>
            <label>Introduce nombre</label>
            <input type="text" name="correo" id="nombre_id"><br>
            <input type="hidden" name="num" id="num_id">
            <input type="submit" name="btn" id="btn_id">

        </form>
        <?php
$agenda=array(0=>array("nombre"=>$_POST["nombre"],
                "direccion"=>$_POST["direccion"],"telefono"=>$_POST["telefono"],"correo"=>$_POST["correo"]));


        function correos($correo){
                
           if(str_contains($correo,"@gmail.com")|| str_contains($correo,"@educa.madrid.org")||str_contains($correo,"@yahoo.com" )||str_contains($correo, "@hotmail.com")){
                
                return true;
               }
               else{
                return false;
               }
         }
         if(file_exists("agenda.txt")){
            $file=fopen("agenda.txt","r");
            file_get_contents($file);
            fclose($file);
         }
         else{
            echo "No existe fichero";

         }

         

?> 

         
<table border="1">
        <tr>
                <td colspan="3">$agenda</td>
        </tr>
        <tr>
                        <td>clave</td>
                        <td>clave</td>
                        <td>contenido</td>
                </tr>

        <?php foreach($agenda as $clave => $valor){ 
                ?>
              
                <tr>
                 
                <th rowspan="4"><?php echo $clave ?></th>
                    <?php 
                    $file=fopen("agenda.txt","a");
                      fwrite($file,"-----".$clave.PHP_EOL);
                      fclose($file);
                    ?>
                   
                        <?php foreach($valor as $nom =>$dat){?>
                <th><?php echo $nom ?></th>
                <td><?php echo $dat ?></td>
           <?php $file=fopen("agenda.txt","a");
                fwrite($file,$nom." : ".$dat.PHP_EOL);
                fclose($file);
           ?>

                 </tr>           
               <?php } ?> 
        <?php }?></body>
         <ol><?php
        foreach($agenda as $clave=>$valor){

                correos($valor["correo"]);
               if(correos($valor["correo"])==true) {
                ?>  <li> <?php echo $valor["correo"]." este correo es valido" ?></li> <?php
               }
               else {
                ?>  <li> <?php echo $valor["correo"]." este correo no es valido" ?></li> <?php
               }
        }
        ?></ol>
</table>   

</html>
