<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Novedad</title>
    <link rel="stylesheet" href="../publicc/diseño.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
</body>

<div class="bloque">
    <form class="form" action="../controls/controladorNov.php" method="post">
        <h3>Crear - Novedad</h3>
        <input required name="newti" class="form-control" placeholder="Tipo..."  type="text">
        <textarea required placeholder="ingresa el contenido de su descripción..." name="des" class="form-control" id="" rows="10"></textarea>
        <input class="btn btn-success btn-block" name="newnov" value="Enviar" type="submit">
        <a class="btn btn-warning btn-block" href='../viewss/Novedades.php'>Regresar</a>
    </form>
    </div>

</html>