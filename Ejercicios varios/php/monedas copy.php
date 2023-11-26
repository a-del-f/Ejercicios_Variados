
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

    <form method="post" action="monedas.php">
        <input type="number"name="number" ><br>
    <input type="checkbox" name="moneda" value="1">Bitcoin <br>
    <input type="checkbox" name="moneda" value="2"> Dólar Americano <br>
    <input type="checkbox" name="moneda" value="3">Libra esterlina <br>
    <input type="checkbox" name="moneda" value="4">Euro <br>
    <input type="submit" name="button" value="Convertir">
    </form>
        <?php if(isset($_GET["number"])){
            
               
                if($_GET["moneda"]=1){
                    echo "Su valor en Bitcoin es". $_GET["number"]*0,00012;
                } echo $_GET["number"]*0,00012;
            if($_GET["moneda"]=2){
                echo"Su valor en Dolares es".$_GET["number"]*1,12;
            }
            if($_GET["moneda"]=3){
                echo "Su valor en Libras es".$_GET["number"]*0,86;
            } 
            if($_GET["moneda"]=3){
                echo "Su valor en Euros es".$_GET["number"]*120,82;
            }
        }?>
</body>
</html>
