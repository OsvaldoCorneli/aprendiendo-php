<?php 
// Verifica si no se ha especificado un controlador en la URL
if (!isset($_REQUEST["controlador"])) {
    // Si no se especifica, por defecto carga el controlador de usuario
    require_once("controlador/usuario_controlador.php"); // Incluye el archivo del controlador de usuario
    $controlador = new UsuarioControlador(); // Crea una instancia del controlador de usuario
    $controlador->indexUsuario(); // Llama al método inicial que muestra la vista de usuario
} else {
    // Si se especifica un controlador y una acción en la URL
    $controlador = $_REQUEST["controlador"]; // Obtiene el nombre del controlador de la solicitud
    $accion = $_REQUEST["accion"]; // Obtiene el nombre de la acción de la solicitud

    // Incluye el archivo correspondiente al controlador especificado
    require_once("controlador/$controlador" . "_controlador.php");

    // Convierte el nombre del controlador en una clase con la primera letra en mayúscula y le añade "Controlador" al final
    $controlador = ucwords($controlador) . "Controlador"; // Ejemplo: "usuario" -> "UsuarioControlador"

    // Crea una instancia del controlador especificado
    $controlador = new $controlador;

    // Llama a la acción especificada en el controlador
    // `call_user_func` permite llamar dinámicamente a métodos en una instancia de clase
    call_user_func([$controlador, $accion]);
}
?>


<!-- 
Explicación detallada:
Sin controlador especificado:

Si no se pasa ningún parámetro controlador en la URL (por ejemplo, index.php), el sistema carga el controlador por defecto: UsuarioControlador.
La línea $controlador->indexUsuario(); llama al método indexUsuario() del controlador de usuario para mostrar la vista principal.
Con controlador y acción especificados:

Si se pasa un controlador y una accion en la URL (por ejemplo, index.php?controlador=usuario&accion=guardar),
 el código extrae estos parámetros para cargar el controlador y ejecutar la acción deseada.
require_once("controlador/$controlador" . "_controlador.php");: Carga el archivo del controlador correspondiente.
$controlador = ucwords($controlador) . "Controlador";: Convierte el nombre del controlador a formato de clase
 (ucwords pone la primera letra en mayúscula) y agrega el sufijo "Controlador".
call_user_func([$controlador, $accion]);: Ejecuta el método ($accion) en la instancia de $controlador.
 Esto permite que el sistema sea flexible y ejecute cualquier acción que se pase en la URL.
Este archivo index.php actúa como enrutador para la aplicación, controlando qué controlador y acción se deben ejecutar en función de los parámetros de la URL. -->