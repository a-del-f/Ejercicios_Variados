<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="Ejerc3.php">
        <label >Introduce un nombre y selcciona una de la tres casillas</label>
        <br>
        <input type="text" name="name" id="name">
        <br>
        <input type="radio" name="estudios" id="no_estudios" value="no_estudios">
        <label >no tiene esudios</label>
        <br>
        <input type="radio" name="estudios" id="estudios_primarios" value="estudios_primarios">
        <label >tiene estudios primarios</label>
        <br>
        <input type="radio" name="estudios" id="estudios_secundarios" value="estudios_secundarios">
        <label >tiene estudios secundarios</label>
        <input type="submit" name="btn">
        <?php
        if(isset($_GET["name"])){
            if(isset($_GET["estudios"])){
                if($_GET["estudios"]=="no_estudios"){
                    ?><p> <?php echo $_GET["name"] ?>, no tiene estudios</p> <?php
                }
                 else if($_GET["estudios"]=="estudios_primarios"){
                    ?><p> <?php echo $_GET["name"] ?>, tiene estudios primarios</p> <?php
                }
                else if($_GET["estudios"]=="estudios_secundarios"){
                    ?><p> <?php echo $_GET["name"] ?>, tiene estudios secundarios</p> <?php
                }
            }
        }
        ?>
    </form>
</body>
</html>