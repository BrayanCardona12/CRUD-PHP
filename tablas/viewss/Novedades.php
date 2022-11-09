<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../publicc/diseño.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   <!--DataTable-->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
 
    <title>Tabla Novedades</title>
    <style>
        body{
            background-color: #ECECEC;
        }
    </style>

</head>
<body>

<?php 
require("../modelos/classNovedad.php");
$newNove = new Novedades;
$datos = $newNove -> consultarNove();


?>
<div id="cont" class="container-xl">
<form action="../controls/controladorNov.php" method="post">
<input name="BTNnewNov" value="New Row" type="submit" class="btn btn-outline-success">
</form>
<table id="tablita2" class="table table-light table-striped table-bordered table-hover ">
        <thead >
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Descripción</th>
                <th>Eliminar</th>
                <th>Actualizar</th>

            </tr>
        </thead>
        <tbody>
        <?php
while($data = $datos ->fetch(PDO::FETCH_ASSOC)) {
?>
     
            <tr>
                <td><?=$data["novedadID"]?></td>
                <td ><?=$data["tipo"]?></td>
                <td><?=$data["descipcion"]?></td>
                <td > 
                    <input class="btn btn btn-danger" onclick="alerta(<?=$data['novedadID']?>)" name="borrarNov" type="submit" value="Delete">
             
                </td>
                <td><form action="../controls/controladorNov.php?id=<?=$data['novedadID']?>" method="POST">
                    <input class="btn btn btn-success" name="actuNov" type="submit" value="Update">
                    </form></td>
            </tr>
 
           
<?php
} ?>  
            
        </tbody>
    
    </table>
    <a class="btn btn-warning" href="../index.php">Regresar</a>
    </div>


    <script>
        function alerta(id) {
            var resp = confirm("¿Seguro de que quiere eliminar el registro " + id + "?")
            if(!resp) {
                window.location.href="Novedades.php"
            }else {
                window.location.href=`../controls/controladorNov.php?id=${id}&value=deleteNov`
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#tablita2').DataTable();
        });
    </script>
</body>
</html>