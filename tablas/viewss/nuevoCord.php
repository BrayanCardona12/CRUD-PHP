<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Coodinador</title>
    <link rel="stylesheet" href="../publicc/diseño.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
</body>

<div class="bloque">
    <form class="form" action="../controls/controladorCord.php" method="post">
        <h3>Crear - Coodinador</h3>
        <input required name="newNombre" class="form-control" placeholder="Nombre..."  type="text">
        <input required name="newApe" class="form-control" placeholder="Apellido..." type="text">
        <input required name="newEmail" class="form-control" placeholder="Email..." type="email">
        <input class="btn btn-success btn-block" name="newcord" value="Enviar" type="submit">
        <a class="btn btn-warning btn-block" href='../viewss/Coordinador.php'>Regresar</a>
    </form>
    </div>

</html>