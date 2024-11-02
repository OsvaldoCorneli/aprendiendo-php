<?php 
require_once("modelo/usuario.php");

$usuario = new Usuario(
    0,"Osvaldo","Corneli","1234567891234",34
);

var_dump($usuario->consultarTodo());

// $usuario->insertar();
?>