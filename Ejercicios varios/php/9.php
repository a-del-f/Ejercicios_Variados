
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="GetSemana" method="get" action="9.php">
        <input type="text" name="number" id="num1">
        <input type="submit"name="btnEnviar" id="Enviar">
    </form>
    <?php

if(isset($_GET["number"])){
    $num=$_GET["number"];
switch($num){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4 :
        echo "Jueves";
        break;
    case 5 :
        echo "Viernes";
        break;
    case 6 :
        echo "Sabado";
        break;
    case 7:
        echo "Domingo";
        break;
        default:
        echo"No hay ningun numero entre el 1 y el 7";
}}
?>
</body>
</html>
