<?php 
    if(!isset($_REQUEST["controlador"])){
        require_once("controlador/usuario_controlador.php");
        $controlador = new UsuarioControlador();
        $controlador->indexUsuario();
    }else{
    $controlador = $_REQUEST["controlador"];
    $accion = $_REQUEST["accion"];
    require_once("controlador/$controlador"."_controlador.php");

    $controlador = ucwords($controlador)."Controlador";//colocar la primera letra en mayuscula

    $controlador= new $controlador;

    call_user_func([$controlador,$accion]);
    }
  
?>