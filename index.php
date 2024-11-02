<?php 
require_once("usuario.php");

$usuario = new Usuario(
    0,"Osvaldo","Corneli","1234567891234",34
);

$usuario->insertar();
?>