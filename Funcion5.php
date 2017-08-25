<?php

function grados($g,$temperatura){
  $resultado=0;

  if ($temperatura=="Fahrenheit") {
    $resultado=($g*1.8)+32;
    echo "$g grados celsius equivalen a: $resultado grados fahrenheit";
  }
  elseif ($temperatura=="Kelvin") {
    $resultado=$g+273.15;
    echo "$g grados kelvin equivalen a: $resultado grados kelvin";
  }
}
  include_once 'Funcion5.php';
  echo grados($g=$_POST['g'], $opciones=$_POST['opciones']);

   ?>
