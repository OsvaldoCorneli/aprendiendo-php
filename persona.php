<?php

class Persona
{
    public  $nombre;
    private $apellido;
    public $edad;
    public $telefono;
    //variable de la clase
    Static $idioma;
function hablar($tema){

    echo "Soy ", $this->nombre, " y hablo sobre $tema ",$this->temaEsExtenso($tema)."<br>";
}

function ver(){

}

function cantar(){

}

private function temaEsExtenso($tema){
    if($tema =="futbol"){
        return "tema extenso";
    }else{
        return "tema no extenso";
    }
}

}
