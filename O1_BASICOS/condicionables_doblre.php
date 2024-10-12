<?php




/**
 * * Estrcutura Condicional doble (if - else)
 * 
 * 
 * 
 * 
 * if (exprexion){
 * condiciona si la exprexion es verdadera 
 *}else{ si es falsa}
 * endif;
 */


if(1>7){
  echo "Condicion evalua a verdades";
}else{
  echo "condicion evalua a false";
}


if (9 == 12):
  echo "condicion evalua a verdadero;";
else:
  echo "condicion evalua a falso";
endif;

// ejercicios

/**
 * calcular el total de una persona a pagar en  un montayantas , el precio de cada llana es  800 ,si se compra  5  o mas llantas
 */


$_llantas = 800;
$_llanta_descuento = 700;
$compra_llantas = 7;
if($compra_llantas >= 5){
  echo "las llantas tiene un decuento de  ${$_llanta_descuento}";
}else{
  echo "sus llantas le vale ${$_llantas}";
}

echo '<br>';
// determinar si un alumno o aprueba o reapureba curso  sabiendo que aprobara si su promedio de calificaciones es mayor o igual a 3.0 en caso contraria reproueba


$nota1 = 1;
$nota2 = 2;
$nota3 = 3;
$nota4 = 4;
$nota5 = 5;


$promedio = ($nota1 + $nota2+ $nota3+ $nota4) / 4;
$nota_final = $promedio;
echo '<br>';

echo "su nota finas es ${$nota_final}";

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

if( $nota_final >= 30):
echo "Aprueba ";
else:
echo "reprueba la materia";
endif;



/**
 * (8 >= 18) ? echo "verdadero" : "false";
 * operador ? true : false
 */


echo $primero = 1;
echo $segundo= 2;
echo $tercero = 3; 
echo '<br>';
echo $resultado = ($primero > $segundo) ? $primero*$segundo :$primero/$segundo;

echo '<br>';