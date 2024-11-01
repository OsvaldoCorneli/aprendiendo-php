<?php 
echo "Modulo 8<br><br>";

//POO 

class NombreClase{
    //dentro de esta plantilla hay atributos
    // $atributo1;
    // $atributo2;
    //function metodo1(){};
    // function metododos(){};
}

class Persona1{
  public  $nombre;
public $apellido;

public    function saludar(){
        echo "este es un saludo";
    }
}

$persona1 = new Persona1();

$persona1->nombre = "osvaldo";
$persona1->apellido = "corneli";

echo $persona1->nombre." ".$persona1->apellido

?>


<?php 
require_once("persona.php"); //importo el archivo donde esta la clase;

$persona = new Persona();

$persona->nombre = "Matias";

$persona2 = new Persona();

$persona2->nombre = "Paula";

echo $persona->nombre." ".$persona2->nombre;

//variable de clase 
Persona::$idioma = "Español";

echo "<br>".Persona::$idioma."<br><br>";


//THIS 
//hace referencia a una instancia;

$persona->hablar("futbol");
$persona2->hablar("programacion");


//CLASE 6 GET Y SET

$persona->setTelefono("2313823213");
echo $persona->getTelefono();

//CONSTRUCTOR Y DESTRUCTOR

$persona3 = new Persona("Jose", "Perez");
echo $persona3->apellido;


?>