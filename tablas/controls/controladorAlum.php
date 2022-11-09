<?php

include_once("../modelos/classAlumno.php");


if (!isset($_REQUEST["alumno"])) {
    if (($_REQUEST['id'] !=null) && ($_REQUEST["value"] == "dele")) {
    
        $id = $_REQUEST["id"];
        $alum = new Alumno();
        $alum -> borrarAlumno($id);
    
    
    }elseif (isset($_REQUEST["actualizarBorrar"])) {
        header("Location: ../viewss/actAlumno.php");
    
    
    }elseif(isset($_REQUEST["BTNnewAlum"])){
        header("Location: ../viewss/nuevoAlumno.php");
        
    }elseif(isset($_REQUEST["actAlum"])) {
        $nombre = $_REQUEST["actNombre"];
        $prog = $_REQUEST["actProm"];
        $email = $_REQUEST["actEmail"];
        
        $nuevoAlumno = new Alumno();
    
        $nuevoAlumno -> crearAlum($nombre, $prog, $email);
    
    }elseif(isset($_REQUEST["atAlum"])){
        $id = $_REQUEST["idAlum"];
        $nombre = $_REQUEST["atNombre"];
        $prog = $_REQUEST["atProm"];
        $email = $_REQUEST["atEmail"];
        $nuevoAlumno = new Alumno();
        print($nuevoAlumno -> actualizarAlumno($nombre, $prog, $email, $id ));
    }elseif(($_REQUEST['id'] !=null) && ($_REQUEST["value"] == "act")) {
        header("Location: ../viewss/actAlumno.php?id=".$_REQUEST['id']);
    }
    
}



?>

