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

//HERENCIA

/*
require_once("ruta");
subclase extends clasepadre{

} 
con protected solamente tienen acceso las subclases y clase padre.

*/


// clases abstractas.

/*
abstract class nombreclase{

}
*/



//TYPE HINTING

 //determinacion de tipos, es poder enviar un argumento de tipo objeto

//  function saludar(Empleado: $empleado){}  OBTIENE COMO ARGUMENTO UN OBJETO DE TIPO EMPLEADO


//POLIMORFISMO.. 

//SOBRECARGA de METODOS PHP NO LO PERMITE;

//sobreescritura de metodos si se puede en php,

//TRAIT - mecanismo de reutilizacion de codigo en lenguaje de herencia simple..
// utilizando la palabra reservada use
//clase nombredeclase use nombredelmetodo; 

//CARGA AUTOMATICA:
// mediante una clase podemos crear un autoimport que importe los archivos necesarios


//clases anonimas
// se guarda una clase en una variable

$claseAnonima = new class{
    public $nombre;
    function saludar(){
        
    }
}

?>