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
$NuevaFrase = str_replace($palabraBuscar, $palabraRemplazar, $heredoc);

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

$esParOImpar = $numeroParOImpar % 2 == 0 ? "El numero es Par<br>" : "El numero es Impar<br>";

echo "$esParOImpar<br>";

$numeroParOImpar = 3;

$esParOImpar = $numeroParOImpar % 2 == 0 ? "El numero es Par<br>" : "El numero es Impar<br>";

echo "$esParOImpar<br>";
?>


<?php
//Modulo 5
echo "<br> MODULO 5 <br><br>";
// Módulo 5: Estructuras de Control

// Condicional If: Escribe un script que evalúe si una variable 
// tiene un valor positivo, negativo o es cero, e 
// imprime un mensaje correspondiente.

$NumeroEj1_5 = -5;

if ($NumeroEj1_5 > 0) {
    echo "El numero $NumeroEj1_5 es positivo<br>";
} else if ($NumeroEj1_5 < 0) {
    echo "El numero $NumeroEj1_5 es negativo<br>";
} else {
    echo "El numero es 0 <br>";
}

// Switch: Crea un menú donde el usuario ingrese un número del 
// 1 al 3 y el script muestre mensajes diferentes usando switch.

$numeroUsuario = 2;

switch ($numeroUsuario) {
    case 1:
        echo "La opcion 1 es: Llamar";
        break;
    case 2:
        echo "La opcion 2 es: Dejar un mensaje";
        break;
    case 3:
        echo "La opcion 3 es: Eliminar el mensaje";
        break;
    default:
        echo "El numero $numeroUsuario no corresponde a una opcion correcta";
        break;
}
echo "<br>";

// Ciclo For: Escribe un bucle for que imprima los números del 
// 1 al 10. Haz lo mismo con un ciclo while y un do while.

for ($i = 1; $i <= 10; $i++) {
    echo "El numero es $i<br>";
}

$numeroWhile = 1;

while ($numeroWhile <= 10) {
    echo "El numero en el while es $numeroWhile <br>";
    $numeroWhile++;
};

$numeroDoWhile = 1;

do {
    echo "El numero en el Do while es $numeroDoWhile <br>";
    $numeroDoWhile++;
} while ($numeroDoWhile <= 10);




// Foreach: Declara un arreglo con tus comidas favoritas y usa 
// foreach para imprimir cada elemento.

$comidas = ["Empanada", "Milanesa", "Pizza", "Tamales"];

foreach ($comidas as $comida) {
    echo "Mi comida favorita es $comida<br>";
};




?>


<?php

// MODULO 6: Arreglos
echo "<br> MODULO 6 <br><br>";
// Arreglos Simples: Crea un arreglo con tus 5 películas
//  favoritas y muestra cada una en pantalla.

$peliculas = ["Matrix", "Titanic", "Back to future", "Scream", "Halloween"];


foreach ($peliculas as $index => $pelicula) {
    echo "la pelicula $pelicula se encuentra en el indice $index<br>";
}


// Arreglos Asociativos: Crea un arreglo asociativo donde 
// las claves sean nombres de ciudades y los valores sean países.
//  Muestra el país de una ciudad específica.

$paises = [
    "argentina" => "Buenos Aires",
    "brasil" => "Rio de Janeiro",
    "paraguay" => "Asuncion",
    "chile" => "Santiago",
    "bolivia" => "La paz",
    "peru" => "Lima"
];

foreach ($paises as $pais => $ciudad) {

    echo "La ciudad $ciudad pertenece al pais $pais<br>";
};


// Arreglos Multidimensionales: Define un arreglo 
// multidimensional que contenga categorías de productos 
// y algunos productos para cada categoría. Usa bucles 
// para recorrer y mostrar todo el contenido.

$productos = [
    "limpieza" =>["detergente","trapo", "balde"],
    "cocina" => ["Cuchillo", "horno", "olla"],
    "banio"=>["papel", "toalla", "jabon"]
];

foreach($productos as $categoria => $producto){
    foreach($producto as $elemento){
        echo "El producto $elemento pertenece a la categoria $categoria<br>";
    }
}

?>


<?php 
// Módulo 7: Funciones
echo "<br>MODULO 7 <br><br>";
// Funciones Básicas: Escribe una función que reciba un 
// nombre y devuelva un saludo personalizado.

function saludo($nombre){
    echo "Hola, mi nombre es $nombre<br>";
}

saludo("Osvaldo");
saludo("Matias");


// Parámetros y Return: Crea una función que reciba dos 
// números como parámetros, los sume y devuelva el resultado.

function suma($suma1,$suma2){
    return $suma1+$suma2;
}

echo suma(2,4)."<br>";
echo suma(8,54);

// Funciones Anónimas: Define una función anónima que calcule 
// el cuadrado de un número, y luego llama a esa función con un 
// valor de prueba.

$anonima = function ($numero){
    return $numero**2;
};

echo "<br>".$anonima(3);


?>