<?php
include("Cuenta.php");
$cuenta1 = new Cuenta("Luis","BBVA",0.02,50);
$cuenta2 = new Cuenta("Andres","Caixa",0.02,50);

echo $cuenta1->__get("cuenta")."<br>";
echo $cuenta2->__get("interes")."<br>";
$cuenta1->ingreso(50);
echo $cuenta1->__get("saldo")."<br>";
$cuenta2->reintegro(60);
echo $cuenta2->__get("saldo")."<br>";
$cuenta2->reintegro(30);
echo $cuenta2->__get("saldo")."<br>";



?>