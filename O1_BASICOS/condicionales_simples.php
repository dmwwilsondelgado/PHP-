<?php
/** 
 * Estructura Simple
 * 
 * if(exprexion){
 * codigo para ejecutar
 * 
 * }
 * if(Exprexion):
 * Codigo a ejecutar
 * endif;
 * 
*/





$edad = 17;
$saludo = "hola persona ;" ;
echo "Hola user  tienes mayor de 18 años ?";
echo '<br>';
if ($edad >= 18){
  
  echo "p";
}
echo '<br>';



?>
<div>
  <?php if($edad >=18): ?>
      <h1>Saludo Persona</h1>
  <?php endif; ?>


  <?php if($edad >=18){
    echo "<h1>saludo Persona  </h1>";
  } ?>


 <?php if($edad >=18): ?>
    <h1><?php $saludo ?></h1>
    <?php endif; ?>
</div>



<?php


/*
Realiza un programa donde se elija si el numero es par o impar 
*/
$_numero = 5;
echo '<br>';
if ($_numero % 2 == 0 ){
  echo "es  par ";
}

// en un alamacen se hace un 20% de descuentos a los clientes cuya compra superee lo 100 dolares, cual sera la cantidad que pagara a la persona por su compra


$_compra = 100;
echo '<br>';

if ($compra > 100){
  echo  $compra =  $compra - ($compra * 0.20);
}

echo "el total a pagra es ${$_compra}";
print_r($_compra);
echo '<br>';



?> 


