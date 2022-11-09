<?php
include_once("../modelos/classCordinador.php");

if(!isset($_REQUEST["id"])) {
    $_REQUEST["id"] = 0;
}

if(!isset($_REQUEST["coordinador"])) {
    if(($_REQUEST["id"] != null) && ($_REQUEST["value"] == "delete")) {
        $id = $_REQUEST["id"];
        $deleteCord = new Coordinador();
        $deleteCord -> borrarCo($id);
        
    }elseif(isset($_REQUEST["actuco"])) {
    header("Location: ../viewss/updateCord.php?id=".$_REQUEST["id"]);
    
    }elseif(isset($_REQUEST["BTNnewCord"])) {
        header("Location: ../viewss/nuevoCord.php");
    
    }elseif(isset($_REQUEST["newcord"])) {
        
        $nombre = $_REQUEST["newNombre"];
        $ape = $_REQUEST["newApe"];
        $email = $_REQUEST["newEmail"];
        $nuevoCord = new Coordinador();
        $nuevoCord-> crearCord($nombre,$ape,$email);
    }elseif(isset($_REQUEST["aDCord"])) {
        $id = $_REQUEST["IDCord"];
        $nombre = $_REQUEST["adNombre"];
        $ape = $_REQUEST["adape"];
        $email = $_REQUEST["adEmail"];
        $nuevoCord = new Coordinador();
        print($nuevoCord-> actualizarCo($nombre,$ape,$email, $id));
    }
    
}








?>