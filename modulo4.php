<?php 

// CLASE UNO MODULO CUATRO;

// OPERADORES
// UNARIOS
$numero1 = 2;
$numero2 = 3;

//UNARIO

// OPERANDO operador
$numero1 ++;



//BINARIO
//OPERANDO OPERADOR OPERANDO
$numero1        +      $numero2; 

//TERNARIOS
// OPERANDO OPERADOR OPERANDO OPERADOR OPERANDO
$numero1 > $numero2 ? 'true' : 'false';



// CLASE 2 MODULO 4 OPERADORES DE COMPARACION


//OPERADOR IGUAL ==

$raza = "Husky";

var_dump($raza == "Akita");

var_dump($raza == "Husky");

//OPERADOR IDENTICO === 

$edad = "18";

var_dump($edad == 18);
var_dump($edad === 18);


//OPERADOR DIFERENTE !=

var_dump($edad != 10);

//OTRO OPERADOR DIFERENTE <>:

var_dump($edad<>17);

// Operacion no identico !==

var_dump($edad !== 18);

//Operador mayor que

var_dump($edad > 18);

//Operador mayor que >= 

var_dump($edad >= 18);

// Operador menor que

var_dump($edad > 18);

// Operador menor igual que

var_dump($edad >= 18);

/* Operado de nave espacial <=>
0 Ambos valores sean iguales
-1 el valor es menor
1 el valor es mayor
*/

var_dump($edad <=> 18);

// OPERADORES ARITMETICOS
/*
OPERADOR DE IDENTIDAD +
OPERACDOR DE NEGACION -
*/

$numeroNegativo = -10;
$numeroPositivo = 10;


/*
BINARIOS
Operador de adicion + "SUMA"
Operador de sustraccion - "Resta"
Operador de multiplicacion *
operador de division / 
operador de modulo %
operador de exponenciacion ** 
*/


// MODULO 4 CLASE 4

/*
Operador de asignacion = 
OPeracion de asignacion por referencia = &
Operador de asignacion para concatenar .=
como en otros lenguajes puedes sumar o restar con la variable y el igual $numero += 10;

 */

 $saludo = "Hola ";
 $saludo .= "Osvaldo";

 echo $saludo;

//MOUDLO 4 CLASE 5

//Operador and o &&

$edad = 15;
$esMayor = $edad >= 18;

$regalo = "si";
$traeRegalo = $regalo == "si";

var_dump($esMayor and $traeRegalo);
var_dump($esMayor && $traeRegalo);

//Operador or o ||
var_dump($esMayor or $traeRegalo);
var_dump($esMayor || $traeRegalo);

//Operador xor
var_dump($esMayor xor $traeRegalo); // no permite que ambos sean verdadero

//Operador !

var_dump(!$esMayor);

//MOUDLO 4 CLASE 6

//Operador Pre-incremento ++

$numeroPreIncremento = 20;
echo ++$numeroPreIncremento;

//Operador pos-incremento:

$numeroPosIncremento = 23;
$numeroPosIncremento++;

echo $numeroPosIncremento;

//Operador pre-decremento; 

$numeroPreDecremento = 23;
--$numeroPreDecremento;

echo $numeroPreDecremento;

//Operador pos-decremento; 

$numeroPosDecremento = 23;
$numeroPosDecremento--;

echo $numeroPosDecremento;

//Modulo 4 clase 7
// OPERADOR TERNARIO, ELVIS y FUsION NULL

//Operador ternario (operando)?Operando:Operando

$promedio = 7;

$resultado = ($promedio>=7)?"Aprobaste": "Reprobaste";

echo $resultado;

//OPERADOR ELVIS ?:

$promedio1 = null; // para este operador no puede la variable estar vacia.

$resultado1 = ($promedio1)?:5;

echo $resultado1;

//OPERADOR FUSION NULL ??

$promedio1; // 

$resultado1 = ($promedio1)??5; // como la viariable esta vacia entonces agrega el valor.

echo $resultado1;


//Modulo 4 clase 8

//PRECEDENCIA DE OPERADORES // JERARQUIA DE OPERACIONES


$edad = 20;
$traeCredencial = "No";

$puedeVotar = $edad >= 18 and $traeCredencial == "Si";

echo $puedeVotar;


?>;



