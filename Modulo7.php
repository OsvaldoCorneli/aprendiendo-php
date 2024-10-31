<?php 


//FUNCIONES

function obtenerEdad(){
    $edad = 2024-1990;
    echo "mi edad es $edad";
    echo "<br>";
}

obtenerEdad();
echo "<br>";
echo "<br>";

//PArametros y argumentos 


function obtenerEdadConParametro($anio){
    $edad = 2024-$anio;
    echo "mi edad es $edad";
    echo "<br>";
}

obtenerEdadConParametro(1997);
obtenerEdadConParametro(1990);
obtenerEdadConParametro(1985);
obtenerEdadConParametro(1966);

//RETURN

function obtenerEdadConPreturn($anio){
    $edad = 2024-$anio;
    return $edad;
}


$edad = obtenerEdadConPreturn(2020);
echo $edad;

//Declaraciones de tipo Escalar;
function obtenerEdadContipoDatos(int $anio){
    $edad = 2024-$anio;
    return $edad;
}

//tipo extricto:

// declare(strict_types=1);
function obtenerEdadModoStrict(int $anio){
    $edad = 2024-$anio;
    return $edad;
}


//FUNCIONES ANONIMAS:
$suma = function(){
    return 20+10;
};

echo $suma();
//nos permiten usar variables externas..

//$suma = function() use ($variable){ y esta variable se puede utilizar dentro
//de la funcion.







?>;