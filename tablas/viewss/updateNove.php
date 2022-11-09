<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Novedad</title>
    <link rel="stylesheet" href="../publicc/diseño.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<?php   require_once("../modelos/classNovedad.php");
   $id = $_REQUEST["id"];
   $newCord = new Novedades();
   $da = $newCord -> consultarNovID($id);
   while($data = $da ->fetch(PDO::FETCH_ASSOC)) { ?>


<div class="bloque">
    <form class="form" action="../controls/controladorNov.php" method="post">
        <h3>Actualizar - Novedad</h3>
        <input name="IDNove" type="hidden" value="<?=  $data["novedadID"] ?>">
        <input value="<?=  $data["tipo"] ?>" required name="adtipo" class="form-control" placeholder="Tipo..."  type="text">
        <textarea   required placeholder="ingresa el contenido de su descripción..." name="desss" class="form-control" id="" rows="10"><?=  $data["descipcion"] ?></textarea>
        <input class="btn btn-success btn-block" name="aDnove" value="Enviar" type="submit">
        <a class="btn btn-warning btn-block" href='../viewss/Novedades.php'>Regresar</a>
    </form>
    </div>

    <?php } ?>
</body>
</html>