<?php
class Alumno {
public $idAlum;
public $nombre;
public $correo;
public $programa;


public function consultarAlum() {
    require_once("../baseDatos/db.php");
    $conn = connect();
    $sql = "select * from aprendiz";
    $consulta = $conn -> prepare($sql);
    $consulta -> execute();
    return $consulta;
    $conn = null;

}

public function consultarAlumID($idAlum) {
    require_once("../baseDatos/db.php");
    $conn = connect();
    $sql = "select * from aprendiz where aprendizID= ?";
    $consulta = $conn -> prepare($sql);
    $consulta -> execute(Array($idAlum));
    return $consulta;
    $conn = null;

}

public function borrarAlumno($idAlum) {
    require_once("../baseDatos/db.php");
    $conn = connect();
    $sql = "delete from aprendiz where aprendizID = ?";
    $consulta = $conn -> prepare($sql);
    $consulta -> execute(Array($idAlum));
    $conn = null;
    header("Location: ../viewss/Alumno.php");
}

public function actualizarAlumno($nombre,$programa,$correo,$idAlum) {
    require_once("../baseDatos/db.php");
    $conn = connect();
    $sql = "UPDATE aprendiz SET nombre = ?, programa = ?, email = ? WHERE aprendizID = ?";
    $consulta = $conn -> prepare($sql);
    $consulta -> execute(Array($nombre,$programa,$correo,$idAlum));
    $conn = null;
    header("Location: ../viewss/Alumno.php");
 
}

public function crearAlum($nombre,$programa,$correo){
    require_once("../baseDatos/db.php");
    $conn = connect();
    $sql = "INSERT INTO aprendiz (nombre, programa, email) VALUES (?,?,?)";
    $consulta = $conn -> prepare($sql);
    $consulta -> execute(Array($nombre,$programa,$correo));
    $conn = null;
    header("Location: ../viewss/Alumno.php");
}

}


?>





