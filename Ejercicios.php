<?php
/* 
Declaración de Variables y Constantes

Declara tres variables de diferentes tipos de datos: una cadena, 
un número, y un booleano. Declara también una constante para el 
valor de pi. Imprime el valor de cada uno en la consola.
*/

$cadena = "Esta es una cadena";
$numero = 24;
$booleano = true;
const PI = 3.14;

echo $cadena." ".$numero." ".$booleano." ".PI;
echo "<br>";
/*
Conversión de Tipos de Datos

Crea una variable de tipo cadena con un valor numérico,
y conviértela en un número entero y en un número decimal. 
Imprime los resultados de ambas conversiones.
*/

$cadenaNumerica = "34";

$entero = intval($cadenaNumerica);

$decimal = floatval($entero);

echo "Entero: $entero Decimal: $decimal";

echo "<br>";
/*
Concatenación e Interpolación de Cadenas

Declara dos variables con tu nombre y tu apellido,
y concaténalas en una tercera variable para crear 
tu nombre completo. Luego, utiliza interpolación para
imprimir un mensaje como "Hola, mi nombre es [nombre completo]".
*/

$nombre = "Osvaldo";
$apellido = "Corneli";

echo <<<frase
Hola, mi nombre es "$nombre $apellido". 
frase;

echo "Hola, mi nombre es $nombre $apellido";

echo "<br>";
/*
Uso de Comillas Dobles y Simples

Crea una cadena que incluya comillas dobles y otra que incluya comillas simples.
Imprime ambas en la consola y explica las diferencias entre ambas en cada lenguaje.
*/
$comilladoble = "Este es un \"Mensaje\" que incluye comillas dobles";
$comillasSimple = "Este es un 'Mensaje' que incluye comillas simple";

echo $comilladoble;
echo $comillasSimple;
echo "<br>";
/*
Heredoc y Nowdoc (solo en PHP)

Escribe un bloque de texto largo usando Heredoc y Nowdoc en PHP,
 y el equivalente más cercano en Java y JavaScript para almacenar 
 texto largo en una variable.
*/

$variable = "Esto es una variable";
$textoHeredoc = <<<Texto
Este texto esta en un Heredoc y puedo agradar variable
$variable;
Texto;

$textoNowdoc = <<<'Texto'
Este es un texto de Nowdoc y no puedo agregar variables - $variable
Texto;

echo $textoHeredoc;

echo $textoNowdoc;

echo "<br>";
/*
Extracción y Búsqueda en Cadenas

Declara una cadena que contenga una oración. 
Encuentra la posición de una palabra específica 
en la cadena e imprime su índice. Extrae esa palabra
usando el índice obtenido.
*/

$oracion = "Esto es una oracion donde necesito buscar una palabra.";
$buscar = "oracion";

$existe = str_contains($oracion, $buscar);


$indice = strpos($oracion, $buscar);

echo $existe ? "la palabra $buscar existe, en el indice $indice" : "No existe en la oracion";

/*
Reemplazo y Formato de Texto

Declara una cadena con una frase y reemplaza una palabra específica por otra.
Luego, cambia todo el texto a mayúsculas y minúsculas.
*/




/*
Uso de Operadores Aritméticos

Declara dos números y realiza las operaciones aritméticas básicas: suma, resta,
multiplicación, división y módulo. Imprime los resultados de cada operación.
*/



/*
Operadores de Comparación y Lógicos

Declara dos variables con valores numéricos y compara 
si el primero es mayor que el segundo. Si es así, imprime 
"Es mayor"; si no, imprime "Es menor o igual".
 Añade un operador lógico para verificar si ambos 
 números son mayores que cero antes de hacer la comparación.
*/


/*
Operadores de Comparación y Lógicos
Declara dos variables con valores numéricos y compara si el 
primero es mayor que el segundo. Si es así, imprime "Es mayor"; 
si no, imprime "Es menor o igual". Añade un operador lógico para verificar 
si ambos números son mayores que cero antes de hacer la comparación.
*/


/*
Operador Ternario y Operador de Fusión Nula (o equivalente)

Declara una variable que puede ser nula y usa un operador
 ternario para verificar si es nula. 
 Si es así, asígnale un valor predeterminado; si no, 
 imprime su valor actual.
*/

?>;