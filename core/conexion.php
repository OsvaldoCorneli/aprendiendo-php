<?php 
// Clase para establecer una conexión con la base de datos
class Conexion {

    // Constructor de la clase Conexion que define los parámetros de conexión a la base de datos
    public function __construct(
        public string $driver = "mysql",       // Tipo de base de datos, en este caso, MySQL
        public string $host = "localhost",     // Servidor donde se aloja la base de datos
        public string $user = "root",          // Nombre de usuario para la base de datos
        public string $pass = "",              // Contraseña del usuario
        public string $dbName = "sunny_side",  // Nombre de la base de datos a la que se conectará
        public string $charset = "utf8"        // Conjunto de caracteres para la comunicación
    ) {}   

    // Método protegido para iniciar la conexión a la base de datos
    protected function conexion() {
        try {
            // Aquí se crea un nuevo objeto PDO para conectarse a la base de datos.
            // La sintaxis del DSN (Data Source Name) es la siguiente:
            // "<driver>:host=<host>;dbname=<nombre de la base de datos>;charset=<charset>"
            // Esto le dice a PDO cómo conectarse a la base de datos
            $pdo = new PDO(
                "$this->driver:host=$this->host;dbname=$this->dbName;charset=$this->charset", // DSN de la conexión
                $this->user,   // Usuario de la base de datos
                $this->pass    // Contraseña de la base de datos
            );

            // Si la conexión se realiza correctamente, se retorna el objeto PDO, que permite ejecutar consultas en la base de datos
            return $pdo;
        } catch (PDOException $mensaje) {
            // Si ocurre un error, se captura en $mensaje y se muestra en pantalla
            echo $mensaje->getMessage();
        }
    }
}
?>


<!-- Explicación Detallada:

Constructor (__construct): Define los parámetros de conexión a la base de datos (driver, host, usuario, contraseña, nombre de la base de datos y conjunto de caracteres).

Driver: Define el tipo de base de datos a utilizar, en este caso, "mysql".
Host: Especifica el servidor donde está alojada la base de datos, aquí "localhost" (la propia máquina).
Usuario y contraseña: user y pass se utilizan para autenticarse en la base de datos.
dbName y charset: Define el nombre de la base de datos y el conjunto de caracteres, lo que garantiza que se usen caracteres en el formato adecuado.
Método conexion:

new PDO: Crea un objeto PDO para conectarse a la base de datos.
DSN (Data Source Name): Es una cadena de conexión que le dice a PDO cómo conectarse. Su formato es 
"<driver>:host=<host>;dbname=<nombre de la base de datos>;charset=<charset>".
En este caso, la cadena se genera dinámicamente
 usando $this->driver, $this->host, $this->dbName y $this->charset, de modo que se convierte en: "mysql:host=localhost;dbname=sunny_side;charset=utf8".
$this->user y $this->pass: El objeto PDO usa estos valores para iniciar sesión en la base de datos.
Retorno de $pdo: Si la conexión es exitosa, el objeto PDO se devuelve y permite ejecutar consultas.
 Si falla, captura la excepción (PDOException) y muestra un mensaje de error. -->
