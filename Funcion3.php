<?php

function calcule($valor1, $valor2, $valor3,  $operacion){
$resultado = 0;

if ($operacion=="promedio") {
  $resultado=($valor1+$valor2+$valor3)/3;
  echo "El valor del articulo primer del establecimiento es: $valor1 <br> <hr>";
  echo "El valor del articulo segundo del establecimiento es: $valor2 <br> <hr>";
  echo "El valor del articulo tercer del establecimiento es: $valor3 <br> <hr>";
  echo "El promedio de los articulos es: ";
  }
  return $resultado;
}
  echo calcule($valor1=$_POST['valor1'],$valor2=$_POST['valor2'],$valor3=$_POST['valor3'],"promedio");

 ?>
