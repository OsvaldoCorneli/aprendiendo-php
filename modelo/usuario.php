<?php 
// Incluye el archivo CRUD para heredar la funcionalidad de conexión y operaciones de base de datos
require_once("core/crud.php");

// Clase Usuario que extiende Crud, representando a un usuario en la base de datos
class Usuario extends Crud {

    // Constructor que define las propiedades de un usuario y establece la tabla a utilizar
    public function __construct(
        public int $id = 0,               // ID del usuario (0 por defecto, se asignará uno nuevo al insertar)
        public string $nombre = "",       // Nombre del usuario
        public string $apellido = "",     // Apellido del usuario
        public string $telefono = "",     // Teléfono del usuario
        public int $edad = 0              // Edad del usuario
    ) {
        // Llama al constructor de Crud, especificando "usuario" como la tabla a manipular
        parent::__construct("usuario");
    }

    // Método para insertar un nuevo usuario en la base de datos
    public function insertar() {
        // Llama al método 'crear' heredado, definiendo las columnas y sus marcadores de valores
        $this->crear(
            "id,nombre,apellido,telefono,edad",  // Columnas de la tabla usuario
            "?,?,?,?,?",                         // Marcadores de valores para los datos
            [$this->id, $this->nombre, $this->apellido, $this->telefono, $this->edad]  // Datos a insertar
        );
    }

    // Método para actualizar un usuario existente en la base de datos
    public function actualizar() {
        // Llama al método 'modificar' heredado, especificando las columnas a actualizar y sus valores
        $this->modificar(
            "nombre=?,apellido=?,telefono=?,edad=?",   // Definición de columnas y sus marcadores
            [$this->nombre, $this->apellido, $this->telefono, $this->edad, $this->id]  // Datos a actualizar, incluyendo el ID al final
        );
    }

    // Método para eliminar un usuario de la base de datos por su ID
    public function remover() {
        // Llama al método 'delete' heredado de Crud, pasando el ID del usuario a eliminar
        $this->delete($this->id);
    }
}
?>

<!-- Explicación Detallada:
Herencia de Crud: La clase Usuario extiende Crud, por lo que hereda todos los métodos para conectarse a la base de datos y realizar operaciones CRUD.

Constructor de la clase Usuario:

Define las propiedades del usuario (id, nombre, apellido, telefono, edad), que representan los datos de cada registro en la tabla usuario.
parent::__construct("usuario"): Llama al constructor de la clase Crud, especificando "usuario" como el nombre de la tabla a manipular.
Método insertar:

Usa el método heredado crear para insertar un nuevo usuario en la base de datos.
Parámetros de crear:
Columnas: "id,nombre,apellido,telefono,edad" — Nombres de las columnas de la tabla donde se insertarán los valores.
Marcadores: "?,?,?,?,?" — Cada marcador ? corresponde a un valor que será insertado en el orden definido.
Valores: [$this->id, $this->nombre, $this->apellido, $this->telefono, $this->edad] — Array que contiene los valores de las propiedades actuales del 
objeto Usuario (la instancia de usuario actual).
Método actualizar:

Llama al método heredado modificar para actualizar un usuario existente.
Parámetros de modificar:
Columnas: "nombre=?,apellido=?,telefono=?,edad=?" — Define las columnas que se actualizarán, con sus respectivos marcadores ? para los valores.
Valores: [$this->nombre, $this->apellido, $this->telefono, $this->edad, $this->id] — Array con los valores actuales de las propiedades, más el id al 
final, que se usa en la cláusula WHERE para identificar el registro a actualizar.
Método remover:

Llama al método heredado delete para eliminar el usuario de la base de datos según su id.
Este método solo necesita el id del usuario actual para identificar qué registro debe ser eliminado en la tabla usuario.
Este archivo encapsula las operaciones de base de datos para un usuario específico, y cada método (insertar, actualizar, remover) actúa sobre la tabla 
usuario en la base de datos. La clase Usuario está organizada de manera que, al crear un objeto de tipo Usuario, 
sus métodos facilitan la interacción con la base de datos sin necesidad de escribir consultas SQL directamente en otros lugares del código. -->
