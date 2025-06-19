<?php 
$encabezado = "<html><head><title>Ejercicios</title></head><body>";
$pie ="</body></html>";
$encabezado;

// 1. Mostrar un mensaje de saludo usando una variable.
$men = "<h1 style= text-align:center;>¡Hola esto es un mensaje de bienvenida!</h1>";
echo"$men";
echo "<br>";
// 2. Sumar dos números almacenados en variables y mostrar el resultado.

$num1 = 10;
$num2 = 20;
$sum = $num1 + $num2;
echo"<p>El resultado de la suma es: $sum</p>";
// Calcular el área de un rectángulo con base y altura dadas.
echo "<br>";
$base = 15;
$altura = 25;
$area = ($base * $altura) /2;
echo "<p>El área de un rectángulo cuya base: $base y altura: $altura es: $area</p>";
// 4. Verificar si un número es mayor que otro.
echo "<br>";
echo "<p>Primer número: $num2</p>";
echo "<p>Segundo número: $num1</p>";
if ($num2 > $num1) {
  echo "<p>El primer número es mayor</p>";
}



$pie;