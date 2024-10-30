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


?>;