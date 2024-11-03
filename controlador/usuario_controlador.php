<?php 
// Incluye el archivo usuario.php, donde se define la clase Usuario
require_once("modelo/usuario.php");

// Define la clase UsuarioControlador, que hereda de la clase Usuario
class UsuarioControlador extends Usuario {

    // Constructor de la clase UsuarioControlador
    public function __construct() {
        // Llama al constructor de la clase padre (Usuario)
        parent::__construct();
    }

    // Método para cargar la vista principal de usuarios
    public function indexUsuario() {
        // Incluye el archivo vista/usuarios.php, que muestra la lista de usuarios
        require_once("vista/usuarios.php");
    }

    // Método para mostrar un usuario específico o el formulario para agregar uno nuevo
    public function mostrarUsuario() {
        // Verifica si se recibe un 'id' a través de la URL o un formulario
        if (isset($_REQUEST["id"])) {
            // Llama al método consultarUno para obtener los datos del usuario con ese 'id'
            $usuario = $this->consultarUno($_REQUEST["id"]);
        } else {
            // Si no hay 'id' especificado, crea un usuario nuevo vacío (por defecto)
            $usuario = $this;
        }
        // Incluye el archivo vista/usuario_formulario.php, que muestra el formulario para agregar o editar usuarios
        require_once("vista/usuario_formulario.php");
    }

    // Método para guardar los datos de un usuario, ya sea para agregar o actualizar
    public function guardar() {
        // Asigna a las propiedades de la clase los valores recibidos desde el formulario
        $this->id = $_REQUEST["id"];
        $this->nombre = $_REQUEST["nombre"];
        $this->apellido = $_REQUEST["apellido"];
        $this->telefono = $_REQUEST["telefono"];
        $this->edad = $_REQUEST["edad"];

        // Si el id es mayor a 0, significa que el usuario ya existe, así que actualiza; de lo contrario, inserta
        $this->id > 0 ? $this->actualizar() : $this->insertar();

        // Redirige a la página principal (index.php) después de guardar
        header("Location:index.php");
    }

    // Método para eliminar un usuario
    public function eliminar() {
        // Llama al método delete de la clase padre para eliminar el usuario con el 'id' especificado
        $this->delete($_REQUEST["id"]);

        // Redirige a la página principal después de eliminar
        header("Location:index.php");
    }
}
?>

<!-- Explicación de cada función:
__construct: Este constructor llama al constructor de la clase padre (Usuario) con parent::__construct(). 
Esto asegura que cualquier configuración inicial de la clase padre también se aplique en UsuarioControlador.

indexUsuario: Este método se encarga de cargar la vista principal de usuarios (vista/usuarios.php). 
En esta vista se mostrará, por ejemplo, una lista de todos los usuarios.

mostrarUsuario: Muestra el formulario para agregar o editar un usuario. Si recibe un id (pasado a través de $_REQUEST),
 llama al método consultarUno para obtener los datos de ese usuario. Si no hay id, crea un nuevo usuario vacío.

guardar: Recibe datos del formulario y decide si debe insertar un nuevo usuario o actualizar uno existente. 
Si el id es mayor a 0, actualiza el usuario con el método actualizar. Si no, agrega uno nuevo con insertar. Al final, redirige a la página principal (index.php).

eliminar: Recibe un id y llama al método delete para eliminar al usuario especificado. Luego, redirige a index.php.

Este código organiza los métodos en un controlador, manteniendo la lógica de negocios separada de las vistas y facilitando la gestión de usuarios en una aplicación PHP. -->