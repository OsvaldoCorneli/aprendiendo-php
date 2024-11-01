<?php

//AQUI INICIAN EJERCICIOS DE LOGICA PHP
echo "AQUI INICIAN EJERCICIOS DE LOGICA PHP";
echo "<br>";
echo "<br>";

// Módulo 3: Variables, Constantes y Tipos de Datos

// Variables y Constantes: Crea una variable con tu nombre y una constante con el valor de PI (3.1416). Imprime ambos valores en pantalla.

$myNombre = "Osvaldo Corneli";
const PI = 3.1416;

echo PI;
echo $myNombre;
echo "<br>";
// Concatenación e Interpolación: Crea dos variables 
//nombre y apellido y muestra un saludo utilizando tanto
//concatenación como interpolación.

$nombre = "Osvaldo";
$apellido = "Corneli";

echo "Mi nombre " . $nombre . " y mi apellido es " . $apellido;
echo "El nombre es $nombre $apellido";
echo "<br>";
// Manipulación de Cadenas: Escribe un script que encuentre
//y reemplace una palabra en una cadena dada y luego 
//muestre el resultado. Usa Heredoc para definir la cadena 
//original.

$heredoc = <<<Frase
Este mensaje es para remplazar la palabra y despues imprimir
el mensaje nuevo con el cambio realizado.
Frase;

echo $heredoc;

$palabraBuscar = "imprimir";
$palabraRemplazar = "mostrar";
echo "<br>";
$NuevaFrase = str_replace($palabraBuscar,$palabraRemplazar,$heredoc);

echo $NuevaFrase;

echo "<br><br>";

?>

<?php 

//MODULO 4
echo "MODULO 4 <br>";

// Módulo 4: Operadores

// Operaciones Básicas: Declara dos variables numéricas 
// y usa operadores aritméticos (+, -, *, /, %) para mostrar 
// sus resultados.

$numero1 = 160;
$numero2 = 24;

$resultadoSuma = $numero1 + $numero2;
$resultadoResta = $numero1 - $numero2;
$resultadoDividir = $numero1 / $numero2;
$resultadoMultiplicacion = $numero1 * $numero2;
$resultadoModulo = $numero1 % $numero2;

$mensaje = <<<Mensaje
Resultado Suma $numero1 + $numero2 es igual $resultadoSuma,<br>
Resultado Resta $numero1 - $numero2 es igual $resultadoResta,<br>
Resultado Division $numero1 / $numero2 es igual $resultadoDividir,<br>
Resultado Multiplicacion $numero1 * $numero2 es igual $resultadoMultiplicacion,<br>
Resultado Modulo $numero1 % $numero2 es igual $resultadoModulo.<br>
Mensaje;

echo "$mensaje <br>";

// Operadores de Comparación y Lógicos: Define dos variables 
// y usa operadores de comparación (>, <, ==, !=, etc.)
//  y lógicos (&&, ||, !) para mostrar distintos resultados
//  en pantalla.

$variable1 = 23;
$variable2 = 52;
$variable3 = 0;
$variable4 = true;
$variable5 = false;
$variable6 = -2;

$mensaje1 = $variable1 == 23 && $variable3 == 0;
$mensaje2 = $variable6 < 0 && $variable4;
$mensaje3 = !$variable4 && $variable1 < $variable2;
$mensaje4 = $variable5 || !$variable4;
$mensaje5 = $variable1 == $variable3 || $variable3 > $variable6;

$mensajeFinal = <<<FinalMensaje
respuesta: $mensaje1<br>
respuesta: $mensaje2<br>
respuesta: $mensaje3<br>
respuesta: $mensaje4<br>
respuesta: $mensaje5<br>
FinalMensaje;

echo "$mensajeFinal<br>";


// Operador Ternario: Escribe un script que evalúe si un 
// número es par o impar usando el operador ternario.


$numeroParOImpar = 2;

$esParOImpar = $numeroParOImpar % 2 == 0 ? "El numero es Par<br>":"El numero es Impar<br>";

echo "$esParOImpar<br>";

$numeroParOImpar = 3;

$esParOImpar = $numeroParOImpar % 2 == 0 ? "El numero es Par<br>":"El numero es Impar<br>";

echo "$esParOImpar<br>";
?>


<?php 






?>