<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="http://localhost/tablas/publicc/diseño.css">
    <link rel="stylesheet" href="http://localhost/tablas/publicc/styles2.css">
    <title>Inicio</title>
  
</head>
<body>
    <div class="ti">
    <h1>Tablas</h1>
    <h4>CRUD en PHP</h4>
    </div>
    
    <div class="nave">
        <a href="./viewss/Alumno.php">Alumno</a>
        <a href="./viewss/Coordinador.php">Coordinador</a>
        <a href="./viewss/Novedades.php">Novedades</a>
    </div>

<div class="container-fluid" id="c">
<div class="row">
  <div  class="cont-btn col-sm-12 col-md-6 col-lg-4">
    <iframe src="./viewss/Alumno.php" width="100%"></iframe>
  <a class="btn btn-success" id="buttons" name="alumno" href="./viewss/Alumno.php?id=1">Ir a Tabla Alumno</a>
  </div>

  <div  class="cont-btn col-sm-12 col-md-6 col-lg-4">
  <iframe src="./viewss/Alumno.php" width="100%"></iframe>
    <a  class="btn btn-success" id="buttons" href="./viewss/Coordinador.php">Ir a Tabla Coordinador</a>
  </div>

  <div  class="cont-btn col-sm-12 col-md-6 col-lg-4">
  <iframe src="./viewss/Alumno.php" width="100%"></iframe>
    <a  class="btn btn-success" id="buttons" href="./viewss/Novedades.php">Ir a Tabla Novedades</a>
  </div>

</div>
</div>




    

</body>
</html>