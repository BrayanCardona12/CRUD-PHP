<?php 

class Novedades {
    public $idNove;
    public $tipo;
    public $descripcion;


public function consultarNove() {
    require("../baseDatos/db.php");
    $coneccion = connect();
    $sql = "SELECT * FROM novedad";
    $consulta = $coneccion -> prepare($sql);
    $consulta -> execute();
    return $consulta;
    $coneccion = null;
}

public function consultarNovID($idNove) {
    require("../baseDatos/db.php");
    $conect = connect();
    $sql = "SELECT * FROM novedad WHERE novedadID = ?";
    $consulta = $conect -> prepare($sql);
    $consulta -> execute(Array($idNove));
    return $consulta;
    $conect = null;
}



public function borarrNovedad($idNove) {
    require("../baseDatos/db.php");
    $coneccion = connect();
    $sql = "DELETE FROM novedad WHERE novedadID = ?";
    $consulta = $coneccion -> prepare($sql);
    $consulta -> execute(Array($idNove));
    $coneccion = null;
}

public function actualizarNovedad($tipo, $descripcion, $idNove) {
    require("../baseDatos/db.php");
    $conect = connect();
    $sql = "UPDATE novedad SET tipo = ?, descipcion = ? WHERE novedadID = ?";
    $consulta = $conect -> prepare($sql);
    $consulta -> execute(ARRAY($tipo,$descripcion, $idNove));
    $conect = null;
    header("Location: ../viewss/Novedades.php");
}

public function crearNove($tipo,$descripcion){
    require("../baseDatos/db.php");
    $conect = connect();
    $sql = "INSERT INTO novedad (tipo, descipcion) VALUES (?,?)";
    $consulta = $conect -> prepare($sql);
    $consulta -> execute(ARRAY($tipo,$descripcion));
    $conect = null;
    header("Location: ../viewss/Novedades.php");
}

}


?>