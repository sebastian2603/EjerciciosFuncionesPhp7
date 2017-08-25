<?php

function calcule($numero, $operacion){
$resultado=0;

if ($operacion=="cuadrado") {
  $resultado=$numero**2;
  }
  return $resultado;
}
  echo calcule($numero=$_POST['numero'],"cuadrado");

 ?>
