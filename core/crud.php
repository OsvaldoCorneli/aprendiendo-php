<?php 
// Incluye el archivo conexion.php, que define la clase Conexion
require_once("conexion.php");

// La clase Crud extiende Conexion y permite realizar operaciones CRUD en una tabla específica
class Crud extends Conexion {
    private $pdo; // Almacena el objeto PDO para ejecutar consultas SQL

    // Constructor que recibe el nombre de la tabla sobre la que se van a hacer las operaciones
    public function __construct(
        public string $table // Nombre de la tabla en la que se operará
    ) { 
        // Llama al constructor de Conexion para establecer la conexión
        parent::__construct();
        // Guarda el objeto PDO de la conexión en $this->pdo
        $this->pdo = $this->conexion(); 
    }

    // Método para obtener todos los registros de la tabla
    public function consultarTodo() {
        try {
            // Prepara una consulta SQL para seleccionar todos los registros de la tabla
            $stm = $this->pdo->prepare("SELECT * FROM $this->table");
            $stm->execute(); // Ejecuta la consulta
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorna los resultados como objetos

        } catch (PDOException $mensaje) {
            // Si ocurre un error en la consulta, muestra el mensaje de error
            echo $mensaje->getMessage();
        }
    }

    // Método para obtener un único registro de la tabla usando el ID
    public function consultarUno(int $id) {
        try {
            // Prepara una consulta SQL para seleccionar un registro específico usando el ID
            $stm = $this->pdo->prepare("SELECT * FROM $this->table WHERE id=?");
            $stm->execute([$id]); // Ejecuta la consulta, pasando el ID como parámetro
            return $stm->fetch(PDO::FETCH_OBJ); // Retorna el resultado como un objeto

        } catch (PDOException $mensaje) {
            // Si ocurre un error en la consulta, muestra el mensaje de error
            echo $mensaje->getMessage();
        }
    }

    // Método para eliminar un registro de la tabla usando el ID
    public function delete(int $id) {
        try {
            // Prepara una consulta SQL para eliminar un registro específico usando el ID
            $stm = $this->pdo->prepare("DELETE FROM $this->table WHERE id=?");
            $stm->execute([$id]); // Ejecuta la consulta con el ID proporcionado

        } catch (PDOException $mensaje) {
            // Si ocurre un error en la consulta, muestra el mensaje de error
            echo $mensaje->getMessage();
        }
    }

    // Método para insertar un nuevo registro en la tabla
    public function crear(string $columnas, string $marcadores, array $datos) {
        // Prepara una consulta SQL para insertar datos en la tabla
        $stm = $this->pdo->prepare("INSERT INTO $this->table ($columnas) VALUES ($marcadores)");
        $stm->execute($datos); // Ejecuta la consulta pasando los datos como parámetros
    }

    // Método para actualizar un registro existente en la tabla
    public function modificar(string $columnas, array $datos) {
        // Prepara una consulta SQL para actualizar los datos en la tabla
        $stm = $this->pdo->prepare("UPDATE $this->table SET $columnas WHERE id=?");
        $stm->execute($datos); // Ejecuta la consulta pasando los datos como parámetros
    }
}
?>

<!-- 
Explicación Detallada:

Constructor: El constructor recibe el nombre de la tabla donde se realizarán las operaciones y llama al constructor de
 Conexion para iniciar la conexión, guardando el objeto PDO en $this->pdo.

Métodos CRUD:

consultarTodo: Selecciona todos los registros de la tabla y los devuelve como objetos. Usa PDO::FETCH_OBJ para convertir cada fila en un objeto.
consultarUno: Obtiene un solo registro usando su id. Usa una declaración preparada para evitar inyecciones SQL.
delete: Elimina un registro de la tabla usando el id.
crear: Inserta un nuevo registro. columnas especifica las columnas, y marcadores representa los ? que se usan en la consulta preparada.
modificar: Actualiza un registro existente en la tabla. Requiere que el id se pase como el último valor en $datos.
Con estos archivos, tienes una estructura para conectarte a la base de datos y realizar las operaciones básicas de CRUD. -->