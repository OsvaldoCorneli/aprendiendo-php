<?php 

//Array

$array = ["Osvaldo", "Matias" , "Corneli"];

echo $array[2];
echo $array[1];
foreach( $array as $index=>$nombre ) {

    echo "nombre: $nombre $index";


}
echo "<br>";
echo "<br>";
//Arreglos asociativos:

$datos = [
    "nombre"=>"Osvaldo",
    "Apellido"=>"Corneli",
    "Edad"=>"34"
];

foreach($datos as $key=>$valor){
    echo "$key: $valor";
    echo "<br>";
}

echo "<br>";
echo "<br>";

//Agregar a array 

$alumnos=["Osvaldo","Matiaz","Corneli"];

$datos = [
    "nombre"=>"Osvaldo",
    "apellido"=>"Corneli",
    "edad"=>"30"
];
echo "ARRAY";
echo "<br>";
var_dump($alumnos);
echo "<br>";
var_dump($datos);
echo "<br>";

//Agregar con push
echo "ARRAY AGREGADO";
echo "<br>";
array_push($alumnos, "Nassif");
$datos["Estudiante"]=true;

var_dump($alumnos);
echo "<br>";
var_dump($datos);
echo "<br>";


//Eliminar un dato
// echo "ARRAY ELIMINADO";
echo "<br>";
unset($alumnos[3]);

unset($datos["edad"]);

var_dump($alumnos);
echo "<br>";
var_dump($datos);
echo "<br>";

//Modificar datos:
    echo "ARRAY MODIFICADO";
    echo "<br>";
 $alumnos[1]="Matias";   
 $datos["edad"] = "34";

 var_dump($alumnos);
echo "<br>";
var_dump($datos);
echo "<br>";


//FUNCIONES
echo "<br>";
echo "<br>";
var_dump(count($alumnos));
echo "<br>";
var_dump(count($datos));


//Ordenar
echo "<br>";
echo "<br>";
asort($alumnos);
asort($datos);
var_dump($alumnos);
echo "<br>";
var_dump($datos);

//ordenamiento inverso
echo "<br>";
echo "<br>";
arsort($alumnos);
arsort($datos);
var_dump($alumnos);
echo "<br>";
var_dump($datos);

//Buscar
echo "<br>";
echo "<br>";

var_dump(array_search("Matias",$alumnos));
var_dump(array_search("34",$datos));


//remplazar
echo "<br>";
echo "<br>";

$arrayNuevo = array_replace($alumnos,[
    0=>"Paula",
    1=>"Romina"
]);
$datosNuevos = array_replace($datos,[
    "Apellido"=> "Romina",
    "Nombre" => "Paula"
]);
var_dump($arrayNuevo);
echo "<br>";
var_dump($datosNuevos);
//FUNICONES DE ARRAY EN DOCUMENTACION

//ARREGLOS MULTIDIMENCIONALES O MATRIZ
echo "<br>";
echo "<br>";
$animales = [
    ["Puma","Jaguar","Lince"],
    ["Paloma","Pato", "Tucan"],
    ["Serpiente","Cocodrilo","Tortuga"]
];

echo $animales[1][2]; //tucan
echo "<br>";
$animales1 = [
    "Felino"=>["Puma","Jaguar","Lince"],
    "Aves"=>["Paloma","Pato", "Tucan"],
    "Reptiles"=>["Serpiente","Cocodrilo","Tortuga"]
];
echo $animales1["Aves"][2]; //tucan


//Recorrer arreglo multidimencional
echo "<br>";
echo "<br>";
foreach($animales1 as $clave=> $clasificacion){
    foreach($clasificacion as $animal){
        echo "$clave: $animal";
        
    }
    echo "<br>";
}


?>;