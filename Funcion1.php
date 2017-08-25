<?php

function mensaje($nombre){

echo "Hola, Bienvenido a nuestra pagina <br>";
echo ($nombre);
}
if ($_POST) {
  mensaje($_POST["nombre"]);
}
else {
 echo "No ha ingresado ningun caracter";
}

 ?>
