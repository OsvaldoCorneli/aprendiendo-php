<?php 

// estructura de IF - else - tambien utiliza else if como otros lenguajes



$promedio = 5;

if($promedio>=7){

    echo "Aprobaste la materia";


}else{

    echo "No aprobaste la materia";
}


//Switch

$camisa = "verde";

switch($camisa){
    case "azul":
        echo "Camisa azul";
    break;
    case "rojo":
        echo "camisa rosa";
    break;
    case "verde":
        echo "camisa verde";
    break;

}

// Match agrego en PHP 8 - aqui solo devuelve algo, no puedo tener operaciones

echo match($camisa){
    "gris"=>"Encontre camisa gris",
    "rojo"=>"Encontre camisa rojo",
    "verde"=>"Encontre camisa verde",
    "marron"=>"Encontre camisa marron"
};

//WHILE 

$zapatos = 0;
while($zapatos <= 100){
    echo "Zapato numero:", $zapatos;
    ++$zapatos;
}


// DO WHILE
$zapato = 0;

do{
echo "Zapato en do while";
++$zapato;
}while($zapato <= 90);
echo "<br>";
echo "<br>";
//For

for($i = 0; $i <=10; $i++){

    echo "Valor de la variable $i";

}
echo "<br>";
echo "<br>";
//FOR EACH

$array = ["osvaldo", "matias", "Corneli"];

foreach($array as $nombre){
    echo "el nombre es $nombre";
    echo "<br>";
}


?>;