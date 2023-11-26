
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
$sueldo=2750;
$retencion=22;
$retencion=$retencion/100;
$neto=$sueldo-($sueldo*$retencion);
?>
<table >
    <tr>
        <th>Sueldo</th>
        <th>retencion</th>
        <th>neto</th>

    </tr>
    <tr>
        <td><?php global $sueldo;
                echo $sueldo; ?></tdr>
        <td><?php global $retencion;
                echo $retencion; ?></td>
        <td><?php global $neto;
                echo $neto; ?></td>
    </tr>
</table>
</body>
</html>