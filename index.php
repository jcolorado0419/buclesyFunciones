<?php

include('funciones.php');

echo("Clase 4 bucles, arreglos y funciones");

//Sirve para crear un cajon con variables, arreglos indexados, no tiene ninguna clave, entre () se colocan los valores.
//Array Indexado
$arreglo = array("Juan","Matilde","María","Sandra", "James");

//Mostrar arreglos en pantalla, Imprimir, PRINT_R($arreglo)
//Saltos de Linea
echo("<br>");
print_r($arreglo);
echo("<br>...............................................................");

//Array Asociativo
$arreglo=array('usuario1'=>"Juan",'usuario2'=>"Matilde",'usuario3'=>"María",'usuario4'=>"Sandra",'usuario5'=>"James");
echo("<br>");
print_r($arreglo);
echo("<br>................................................................");

//Para definir cuantos cajones tiene un arreglo, o tamaño de Arreglo
//echo y con Print imprimo variables individuales y arreglo con print_r
$tamano=count($arreglo);
echo("<br>");
echo("El tamaño de nuestro arreglo es:<br>".$tamano);
echo("<br>.................................................................");

//Bucle For
for($centinela=0; $centinela<=10; $centinela++)
{
    echo("<br>El valor de Centinela es: ".$centinela."<br>");
}

//Bucle for para recorrer arreglos
echo("<br>..................................................................");
$arreglo = array("Juan","Matilde","María","Sandra", "James");
for($centinela=0;$centinela<count($arreglo);$centinela++)
{
    echo("<br>".$arreglo[$centinela]."<br>");
}

//Blucle foreach para recorrer arreglos
echo("<br>...................................................................");
$arreglo=array('usuario1'=>"Juan",'usuario2'=>"Matilde",'usuario3'=>"María",'usuario4'=>"Sandra",'usuario5'=>"James");
foreach($arreglo as $clave=>$valor)
{
    echo "<br>"."La clave es: ".$clave."<br>";
    echo "<br>".($valor)."<br>";
}

//Blucle foreach para arreglo indexado
echo("<br>...................................................................");
$arreglo = array("Juan","Matilde","María","Sandra", "James");
foreach($arreglo as $clave=>$valor)
{
    echo "<br>"."El valor del cajon es :".$valor."<br>";
    echo "<br>"."El clave del cajon es :".$clave."<br>";
}

//Arreglos multidimencionales (Arreglos de Arreglos)
echo("<br>...................................................................");
$usuarios=array(
    'usuario1'=>array('Nombre'=>"Juan",'Edad'=>20,'Genero'=>"Masculino"),
    'usuario2'=>array('Nombre'=>"Lorena",'Edad'=>30,'Genero'=>"Femenino"),
    'usuario3'=>array('Nombre'=>"Ricardo",'Edad'=>25,'Genero'=>"Masculino"),
    'usuario4'=>array('Nombre'=>"Diana",'Edad'=>27,'Genero'=>"Femenino"),
    'usuario5'=>array('Nombre'=>"Julian",'Edad'=>25,'Genero'=>"Masculino")
);
echo ("<br>");
echo("<br>...................................................................");
print_r($usuarios);

//Ciclo Foreach para acceder a los arreglos multidimencional
echo("<br>...................................................................<br>");
foreach($usuarios as $clavesArreglosUnidimensionales=>$arreglosUnidimensionales)
{
    echo($clavesArreglosUnidimensionales);
    echo ("<br>");
    print_r($arreglosUnidimensionales);
    echo ("<br>");
    foreach ($arreglosUnidimensionales as $claves=>$valores) 
    {
        echo($claves).": ".$valores;
        //echo($valores);
        echo ("<br>");
    }
}

//calcular la edad de dos personas
echo("<br>...................................................................<br>");
calcularEdad(1995);
echo ("<br>");
calcularEdad2(1995,1996);
echo ("<br>");
calcularEdad2(1995,2020);
echo ("<br>");

$edad3=calcularEdad3(1990,2020);
echo("La edad de la persona es: ".$edad3);

//arreglo que se llena con una función

$edades=array('edad1'=>calcularEdad3(1990,2020),'edad2'=>calcularEdad3(1992,2020));
print_r($edades);



?>