
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

$agenda=array(0=>array("nombre"=>"Jorge","direccion"=>"Madrid","telefono"=>99999999,"correo"=>"jorge@correo.com"),
        1=>array("nombre"=>"Julia","direccion"=>"Valencia","telefono"=>235456897,"correo"=>"julia@gmail.com"),
        2=>array("nombre"=>"Lucas ","direccion"=>"Orense","telefono"=>22222222,"correo"=>"lucas@hotmail.com"),
        3=>array("nombre"=>"Susana ","direccion"=>"Avila","telefono"=>987546321,"correo"=>"susana@yahoo.com"));


        function correos($correo){
                
           if(str_contains($correo,"@gmail.com")|| str_contains($correo,"@educa.madrid.org")||str_contains($correo,"@yahoo.com" )||str_contains($correo, "@hotmail.com")){
                
                return true;
               }
               else{
                return false;
               }
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
                 
                <td rowspan="4"><?php echo $clave ?></td>
                        <?php foreach($valor as $nom =>$dat){?>
                <td><?php echo $nom ?></td>
                <td><?php echo $dat ?></td>

                <tr><?php } ?>
                       
                
                <!-- <td><?php echo array_search($valor["direccion"],$valor) ?></td>
                        <td><?php echo $valor["direccion"] ?></td>
                
                <tr>
                        <td><?php echo array_search($valor["telefono"],$valor)?></td>
                        <td><?php echo $valor["telefono"] ?></td>
                </tr>
                <tr>
                        <td><?php echo array_search($valor["correo"],$valor) ?></td>
                        <td><?php echo $valor["correo"] ?></td>
                </tr>
        </tr> -->
        <?php }?>
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
</body>
</html>
