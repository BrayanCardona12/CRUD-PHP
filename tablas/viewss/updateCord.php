<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Coodinador</title>
    <link rel="stylesheet" href="../publicc/diseño.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<?php 
   require_once("../modelos/classCordinador.php");
   $id = $_REQUEST["id"];
   $newCord = new Coordinador();
   $da = $newCord -> consultarCordID($id);
   while($data = $da ->fetch(PDO::FETCH_ASSOC)) {
?>

<div class="bloque">
    <form class="form" action="../controls/controladorCord.php" method="post">
        <h3>Actualizar - Coordinador</h3>
        <input name="IDCord" type="hidden" value="<?= $data["coordinadorID"] ?>">
        <input value="<?= $data["nombre"] ?>" required name="adNombre" class="form-control" placeholder="Nombre..."  type="text">
        <input value="<?= $data["apellido"] ?>" required name="adape" class="form-control" placeholder="Apellidio..." type="text">
        <input value="<?= $data["email"] ?>" required name="adEmail" class="form-control" placeholder="Email..." type="email">
        <input class="btn btn-success btn-block" name="aDCord" value="Enviar" type="submit">
        <a class="btn btn-warning btn-block" href='../viewss/Coordinador.php'>Regresar</a>
    </form>
    </div>

    <?php } ?>
</body>
</html>