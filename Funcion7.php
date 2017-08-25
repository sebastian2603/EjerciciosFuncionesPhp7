<?php

  function Number($numero){
     if ($numero=='0' or $numero=='1' or $numero=='2' or $numero=='3' or $numero=='4' or $numero=='5'or $numero=='6'or $numero=='7'or $numero=='8'or $numero=='9') {
     echo "Es un numero";
     }
     else {
       echo "No es un numero";
     }
}
echo Number($numero=$_POST['numero']  );

 ?>
