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
        <input type="checkbox" name="deportews" id="futbol" value="futbol">
        <label >no tiene esudios</label>
        <br>
        <input type="checkbox" name="desportes" id="tenis" value="tenis">
        <label >tiene estudios primarios</label>
        <br>
        <input type="checkbox" name="desportes" id="baloncesto" value="baloncesto">
        <label >tiene estudios secundarios</label>
        <br>
        <input type="checkbox" name="desportes" id="ciclismo" value="ciclismo">
        <label >tiene estudios secundarios</label>
        <input type="submit" name="btn">
        <?php
        if(isset($_GET["name"])){
            if(isset($_GET["deportes"])){
                if($_GET["estudios"]=="futbol"){
                    ?><p> <?php echo $_GET["name"] ?>, realiza futbol</p> <?php
                }
                 else if($_GET["estudios"]=="tenis"){
                    ?><p> <?php echo $_GET["name"] ?>, realiza tenis</p> <?php
                }
                else if($_GET["estudios"]=="baloncesto"){
                    ?><p> <?php echo $_GET["name"] ?>, realiza ciclismo</p> <?php

                }else if($_GET["estudios"]=="ciclismo"){
                    ?><p> <?php echo $_GET["name"] ?>, realiza ciclismo</p> <?php
                }
            }
        }
        ?>
    </form>
</body>
</html>