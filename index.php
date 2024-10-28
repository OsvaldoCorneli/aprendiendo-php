<?php 

// print "Hola mundo"   ;
// echo "Hola Mundo!" , "otro mensaje";
// echo "<br>"; SALTO DE LINEA
$nombre; //variables

//tipoos de datos

$nombre = "Osvaldo"; //String o cadena
$edad = 34; //entero
$promedio = 8.5; //float
$esAlumno = true; //boolean
$esFalso = false; 

$Nombre = "otro nombre"; //es sensible a las mayusculas
echo "<br>";
echo $nombre, " " , $edad , " ", "$promedio" , " ", $Nombre;
echo "<br>";
//variable constante

const escuela = "Niños"; // se utiliza global
//otra forma 

define("direccions", "Avenida libertad"); 
echo "<br>";
echo escuela , " " , direccions; 
echo "<br>";
// CLASE 2 MODULO 3

// CONVERSIONES DE TIPO

echo " ",gettype($nombre);
echo "<br>";
echo " ",gettype($edad);
echo "<br>";
echo " ",gettype($promedio);
echo "<br>";
echo " ",gettype(value: $esAlumno);
echo "<br>";

$numeroString = "2";
$numeroInt = 23;
$numeroDecimal = 23.2;

$suma = $numeroString + $numeroInt;
$suma2 = $numeroDecimal + $numeroInt;
echo $suma;
echo $suma2;
echo " Sin entero ", intval($suma2); // esta forzando a que el resultado sea integer:


//Clase 3 modulo 3

//CONCATENACION E INTERPOLACION
echo "<br>";
echo "<br>";
$palabra = "Codigo";
$palabra2 = "Facilito";

echo "Hola".$palabra.$palabra2;

//interpolacion
echo "<br>";

echo "Hola esto es interpolacion $palabra y palabra dos: $palabra2";
echo "<br>";
echo "Hola {$palabra} facilito";


// Clase 4 modulo 3
//COMILLAS DOBLES Y COMILLAS SIMPLES
echo "<br>";
echo "<br>";
$saludo = "Hola";

echo "$saludo Osvaldo Bienvenido";
echo "<br>";
echo '$saludo Osvaldo Bienvenido'; //en comillas simples no se puede hacer la interpolacion
// si no vas a utilizar variables en el mensaje mejor usar comillas simple para que el interprete no pierda tiempo
//verificando si hay o no alguna variable en la cadena.

echo "<br>";

echo "\"Eres una mala persona\" me dijo el"; // con \ podemos utilizar comillas dobles en una cadena;
echo "<br>";

echo 'I\'dont'; // tambien en comillas imples

echo "<br>";

echo "\$200"; //tambien signo de moneda.


// CLASE $ modulo 3 HEREDOC Y NOWDOC
echo "<br>";
echo "<br>";

$saludo1 = "Hola";

echo <<<Frase
$saludo 
No cuentes los dias, haz que los dias cuenten
Frase;

//podemos poner comillas sin necesidad de escapar a la comillas

echo "<br>";
//Nowdoc

echo <<<'Frase1'
$saludo 
No cuentes los dias, haz que los dias cuenten
Frase1;

//se pueden guadar en la variable:

$frase2 = <<<Frase
esto esta en la variable
Frase;

echo "<br>";
echo $frase2;

//FUNCIONES PARA STRING

// CLASE 6 MODULO 3, Extraer y buscar palabras en un cadena v2;

echo "<br>";
echo "<br>";

$apellido = substr("osvaldo Corneli",8);

echo $apellido;

$apellido = substr("osvaldo Corneli Nassif",8, 7);

echo $apellido;

$bienvenida = "Bienvenido al mundo de la programacion con PHP;";

$palabraABuscar = "programacion";

$buscar = strpos($bienvenida,$palabraABuscar);
echo "<br>";
echo $buscar;

$extraccion = substr($bienvenida, $buscar);

echo "<br>";
echo $extraccion;


//CLASE 7 MODULO 3 REMPLAZAR Y FORMATO V2;
echo "<br>";
echo "<br>";

$RFC = "91 75 1A EC C7";

$buscar = " ";

$remplazar = ":";

$resultado = str_replace($buscar, $remplazar, $RFC);

echo $resultado; 

//agregar formato

$anio = "1994";
$mes = "01";
$dia = "21";

$formato = "%s-%s-%s" ;
echo "<br>";
echo sprintf($formato, $dia, $mes, $anio);


?>