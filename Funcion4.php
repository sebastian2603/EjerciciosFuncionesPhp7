<?php

function operaciones($numero1,$numero2,$operacion){
  $resultado=0;

  if ($operacion=="sumar") {
    $resultado=$numero1+$numero2;
    echo "El resultado de la suma es: $resultado";
  }
  elseif ($operacion=="restar") {
    $resultado=$numero1-$numero2;
    echo "El resultado de la resta es : $resultado";
  }
  elseif ($operacion=="multiplicar") {
    $resultado=$numero1*$numero2;
    echo "El resultado de la multiplicacion es: $resultado";
  }
  elseif ($operacion=="dividir") {
    $resultado=$numero1/$numero2;
    echo "El resultado de la division es: $resultado";
  }
  elseif ($operacion=="potenciar") {
    $resultado1=$numero1**2;
    $resultado2=$numero2**2;
    echo "El resultado de la potenciacion1 es: $resultado1 <br>";
    echo "El resultado de la potenciacion2 es: $resultado2";
  }
  elseif ($operacion=="raiz") {
    $resultado1=sqrt($numero1);
    $resultado2=sqrt($numero2);
    echo "El resultado de la raiz1 es: $resultado1 <br>";
    echo "El resultado de la raiz2 es: $resultado2";
  }

}
include_once 'Funcion4.php';
echo operaciones($numero1=$_GET['numero1'], $numero2=$_GET['numero2'], $opciones=$_GET['opciones']);

 ?>
