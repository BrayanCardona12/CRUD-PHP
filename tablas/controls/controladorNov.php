<?php

include_once("../modelos/classNovedad.php");

if (!isset($_REQUEST["novedades"])) {
    if(($_REQUEST["id"] != null) && ($_REQUEST["value"] == "deleteNov")) {
        $id = $_REQUEST["id"];

        $nuevaNovedad = new Novedades();
        $nuevaNovedad -> borarrNovedad($id);
        header("Location: ../viewss/Novedades.php");
       
    }elseif(isset($_REQUEST["actuNov"])) {
        header("Location: ../viewss/updateNove.php?id=".$_REQUEST["id"]);
    }elseif(isset($_REQUEST["BTNnewNov"])) {
        header("Location: ../viewss/nuevaNove.php");
    
    }elseif(isset($_REQUEST["newnov"])) {
        
        $ti = $_REQUEST["newti"];
        $des = $_REQUEST["des"];
        $nuevaNovedad = new Novedades();
        print($nuevaNovedad -> crearNove($ti, $des));
    }elseif(isset($_REQUEST["aDnove"])) {
        $id = $_REQUEST["IDNove"];
        $ti = $_REQUEST["adtipo"];
        $des = $_REQUEST["desss"];
        $nuevaNovedad = new Novedades();
        print($nuevaNovedad -> actualizarNovedad($ti, $des, $id));
    }
    
}




?>