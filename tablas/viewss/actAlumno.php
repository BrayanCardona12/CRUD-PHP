<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../publicc/diseño.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
   
</head>
<body>

<?php 
    require_once("../modelos/classAlumno.php");
    $id = $_REQUEST["id"];
    $alum = new Alumno();
    $datos = $alum -> consultarAlumID($id);
    while($data = $datos ->fetch(PDO::FETCH_ASSOC)) {
?>
    
<div class="bloque">
    <form class="form" action="../controls/controladorAlum.php" method="post">
        <h3>Actualizar - Alumno</h3>
        <input type="hidden" name="idAlum" value="<?=$data['aprendizID']?>"/>
        <input value="<?=$data['nombre']?>" required name="atNombre" class="form-control" placeholder="Nombre..."  type="text">
        <input value="<?=$data['programa']?>" required name="atProm" class="form-control" placeholder="Programa..." type="text">
        <input value="<?=$data['email']?>" required name="atEmail" class="form-control" placeholder="Email..." type="email">
        <input class="btn btn-success btn-block" name="atAlum" value="Enviar" type="submit">
        <a class="btn btn-warning btn-block" href='../viewss/Alumno.php'>Regresar</a>
    </form>
    </div>

    <?php } ?>
</body>
</html>