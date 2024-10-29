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

?>;