<?php

class Persona
{
    public  $nombre;
    private $apellido;
    public int|string $edad; //union de tipos
    private $telefono;
    //variable de la clase
    Static $idioma;


    //CONTRUCTOR
    public function __construct(
        String $nombre = "",
        String $apellido = "",
        int $edad = 0,
        String $telefono = ""){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->telefno = $telefono;
        
    }

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

public function getTelefono(){
    return $this->telefono;
}

public function setTelefono($telefono){
    $this->telefono = $this->validarTelefono($telefono);
}

private function validarTelefono($telefono){//utilizamos expresion regular

    if(preg_match('/^[0-9]{10}$/',$telefono)){
        return $telefono;
    }
    else{
        return "estructura incorrecta";
    }

}

//set y get uso general!
public function __get($name){
    return $this->$name;
    }
    
    public function __set($name,$value){
        $this->$name = $value;
    }



    public function __destruct(){
        echo "finaliza el objeto";
    }
}
