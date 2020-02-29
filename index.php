<?php

echo("Clase 4 bucles, arreglos y funciones");

//Sirve para crear un cajon con variables, arreglos indexados, no tiene ninguna clave, entre () se colocan los valores.
//Array Indexado
$arreglo = array("Juan","Matilde","María","Sandra", "James");

//Mostrar arreglos en pantalla, Imprimir, PRINT_R($arreglo)
//Saltos de Linea
echo("<br>");
print_r($arreglo);
echo("<br>..........................");

//Array Asociativo
$arreglo=array('usuario1'=>"Juan",'usuario2'=>"Matilde",'usuario3'=>"María",'usuario4'=>"Sandra",'usuario5'=>"James");
echo("<br>");
print_r($arreglo);
?>