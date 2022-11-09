<?php

class Coordinador {
public $idCord;
public $nombre;
public $apellido;
public $correo;

public function consultarCord() {
    require("../baseDatos/db.php");
    $conect = connect();
    $sql = "SELECT * FROM coordinador";
    $consulta = $conect -> prepare($sql);
    $consulta -> execute();
    return $consulta;
    $conect = null;
}

public function borrarCo($idCord) {
    require("../baseDatos/db.php");
    $conect = connect();
    $sql = "DELETE FROM coordinador WHERE coordinadorID = ?";
    $consulta = $conect -> prepare($sql);
    $consulta -> execute(ARRAY($idCord));
    $conect = null;
    header("Location: ../viewss/Coordinador.php");
}

public function actualizarCo($nombre,$apellido,$correo,$idCord) {
    require("../baseDatos/db.php");
    $conect = connect();
    $sql = "UPDATE coordinador SET nombre = ?, apellido = ?, email = ? WHERE coordinadorID = ?";
    $consulta = $conect -> prepare($sql);
    $consulta -> execute(ARRAY($nombre,$apellido,$correo,$idCord));
    $conect = null;
    header("Location: ../viewss/Coordinador.php");

}

public function consultarCordID($idCord) {
    require("../baseDatos/db.php");
    $conect = connect();
    $sql = "SELECT * FROM coordinador WHERE coordinadorID = ?";
    $consulta = $conect -> prepare($sql);
    $consulta -> execute(Array($idCord));
    return $consulta;
    $conect = null;
}







public function crearCord($nombre,$apellido,$correo){
    require("../baseDatos/db.php");
    $conexion = connect();
    $sql = "INSERT INTO coordinador (nombre, apellido, email) VALUES (?,?,?)";
    $consult = $conexion -> prepare($sql);
    $consult -> execute(Array($nombre,$apellido,$correo));
    $conexion = null;
    header("Location: ../viewss/Coordinador.php");
   
}

}
?>