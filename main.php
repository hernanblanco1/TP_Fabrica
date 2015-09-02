<?php
require_once "empleado.php";
require_once "persona.php";
require_once "fabrica.php";

$unempleado = new empleado("Hernan","Blanco","37040165",123,8500);
$unempleado1 = new empleado("Hernan","Blanco","37040165",123,8500);

$unafabrica = new Fabrica("Inworx");
$unafabrica-> AgregarPersona($unempleado);
$unafabrica-> AgregarPersona($unempleado);

echo $unafabrica-> CalcularSalarios();
echo "<br/>";
echo $unafabrica-> ToString();


?>