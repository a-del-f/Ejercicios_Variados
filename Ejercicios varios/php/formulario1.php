
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="frmPrueba" method="get" action="formulario1.php">
        <input type="text" name="txtPrimero" id="txt1" />
        <input type="text" name="txtSegundo" id="txt2" />
        <input type="submit" name="btnEnviar" id="EnviarFormulario">
    </form>
    <?php
if(empty($_GET["txtPrimero"]) || empty($_GET["txtPrimero"])) {

?>
 <p>Contenido del array asociativo con la informacion del 
        formulario</p>;

<?php print_r($_GET); ?>

<p>Pimer texto: <?php echo $_GET['txtPrimero']?></p>
<p>Segundo texto:<?php echo $_GET['txtSegundo']?></p>
<?php } else{echo "No hay datos del formato <br/>";} ?>
</body>
</html>


