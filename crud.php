<?php 
require_once("conexion.php");
class Crud extends Conexion{
    private $pdo;
    public function __construct(
        public string $table
    ){ 
        $this->pdo = $this->conexion();
    }

    public function consultarTodo(){
        try{
            $stm = $this->pdo->prepare("SELECT * FROM $this->table");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);

        }catch(PDOException $mensaje){
            echo $mensaje->getMessage();
        }
    }

    public function consultarUno(int $id){
        try{
            $stm = $this->pdo->prepare("SELECT * FROM $this->table WHERE id=?");
            $stm->execute([$id]);
            return $stm->fetch(PDO::FETCH_OBJ);

        }catch(PDOException $mensaje){
            echo $mensaje->getMessage();
        }
    }


    public function delete(int $id){
        try{
            $stm = $this->pdo->prepare("DELETE * FROM $this->table WHERE id=?");
            $stm->execute([$id]);
        }catch(PDOException $mensaje){
            echo $mensaje->getMessage();
        }
    }


    public function crear(string $columnas, string $marcadores,array $datos){
        $stm = $this->pdo->prepare("INSERT INTO $this->table $columnas VALUES $marcadores");
        $stm->execute($datos);
    }

    public function modificar(string $columnas, string $marcadores,array $datos){
        $stm = $this->pdo->prepare("UPDATE INTO $this->table $columnas");
        $stm->execute($datos);
    }

}



?>