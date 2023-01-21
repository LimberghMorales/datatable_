<?php
    $conexion = new PDO("mysql:host=localhost;dbname=datatable","root","");
    $PDO=$conexion;
    $statement=$PDO->prepare("SELECT * FROM alumnos");
    $statement->execute();
    $alumnos=$statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- DataTables JBootstrap -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <!-- DataTables JS library -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
  </head>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable(
                {
                "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
                }
                }
            );}
            );
    </script>
<body>
    
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Id</th>
            <th>Apellidos</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($alumnos as $alumno): ?>
            <tr>
                <td><?php echo $alumno[0] ?></td>
                <td><?php echo $alumno[1] ?></td>
                <td><?php echo $alumno[2] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
