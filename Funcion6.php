<?php

function calcule($numero){
$resultado=0;

if (($numero%2)==0) {
  echo " El numero es par";
}
  else {
    echo " El numero es impar";
  }
}
include_once 'Funcion6.php';
echo calcule($numero=$_POST['numero']);
 ?>
