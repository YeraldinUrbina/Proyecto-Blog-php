<?php
echo "<h3>Fase 1: Fundamentos de PHP</h3>" . PHP_EOL;
# 1. Introducción a PHP
/**
 * Concepto: PHP es un lenguaje de programación del lado del servidor
 * de propósito general diseñado para el desarrollo web.
 * Puede integrarse con HTML para crear páginas web dinámicas.
 */
echo "Hola mundo! <br>";

# 2. Sintaxis Básica
// Variables y Tipos de Datos:
/**
 * Concepto: Las variables se usan para almacenar datos.
 * PHP es débilmente tipado, lo que significa que las variables
 * no tienen un tipo de dato fijo.
 */
$nombre = "Juan"; // String
$edad = 25;       // Entero
$precio = 19.99;  // Float
$esEstudiante = true; // Booleano
// echo "Nombre: $nombre, Edad: $edad";
// $Nombre = "Pedro";
// echo "Hola $nombre <br>";
// echo "Hola $Nombre <br>";

// Operadores:
/**
 * Concepto: Los operadores realizan operaciones sobre variables y valores.
 */
// Aritméticos: +, -, *, /, %, **
$a = 10;
$b = 3;
echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a % $b . "<br>";
echo $a ** $b . "<br>";

# 3. Estructuras de Control
// Condicionales:
/**
 * Concepto: Las estructuras de control permiten tomar decisiones
 * en función de una condición.
 */

if ($edad >= 18):
    echo "Hola $nombre, eres mayor de edad";
else:
    echo "Hola $nombre, eres menor de edad";
endif;

switch ($edad) {
    case 18:
        echo "Tienes 18 años" . PHP_EOL;
        break;
    case 19:
        echo "Tienes 19 años" . PHP_EOL;
        break;
    case 20:
        echo "Tienes 20 años" . PHP_EOL;
        break;
    default:
        echo "No tienes 18, 19 o 20 años" . PHP_EOL;
        break;
}

// Bucles:
/**
 * Concepto: Los bucles permiten ejecutar un bloque de código
 * varias veces.
 */
for ($i = 1; $i <= 10; $i++) {
    echo "$i Hola mundo! <br>" . PHP_EOL;
}

# 4. Funciones y Arreglos
// Funciones:
/**
 * Concepto: Las funciones son bloques de código que se pueden
 * reutilizar en diferentes partes de un programa.
 */
function saludar($nombre): string
{
    return "Hola $nombre <br>";
}
echo saludar("Pablo");

// Arreglos:
/**
 * Concepto: Los arreglos son estructuras de datos que permiten
 * almacenar múltiples valores en una sola variable.
 */

// array indexado
$nombres = array("Juan", "Pedro", "Pablo", "Maria", "Ana");
echo $nombres[0] . PHP_EOL;
// echo $nombres[1] . PHP_EOL;
// echo $nombres[2] . PHP_EOL;
foreach ($nombres as $nombre) {
    echo "$nombre <br>" . PHP_EOL;
}

// array asociativo
$persona = array("nombre" => "Juan", "apellido" => "Perez", "edad" => 20);
echo $persona["nombre"] . PHP_EOL;
// echo $persona["apellido"] . PHP_EOL;
// echo $persona['edad'] . PHP_EOL;
foreach ($persona as $key => $value) {
    echo "$key: $value <br>" . PHP_EOL;
}

// array multidimensional
$personas = array(
    array("nombre" => "Juan", "apellido" => "Perez", "edad" => 20),
    array("nombre" => "Pedro", "apellido" => "Gomez", "edad" => 25),
    array("nombre" => "Maria", "apellido" => "Lopez", "edad" => 30)
);
echo $personas[0]["nombre"] . PHP_EOL;
echo $personas[1]["nombre"] . PHP_EOL;
echo $personas[2]["nombre"] . PHP_EOL;
foreach ($personas as $persona) {
    foreach ($persona as $key => $value) {
        echo "$key: $value <br>" . PHP_EOL;
    }
    echo "<br>" . PHP_EOL;
}

# 5. Manejo de Strings
/**
 * Concepto: PHP proporciona funciones para manipular cadenas de texto.
 */
// $texto = "Hola, mundo";
// echo strlen($texto);
// // Longitud de la cadena
// echo str_replace("mundo", "PHP", $texto);
// Reemplazo
