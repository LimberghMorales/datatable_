<?php
    $conexion = new PDO("mysql:host=localhost;dbname=datatable","root","");
    $PDO=$conexion;
    $statement=$PDO->prepare("SELECT * FROM alumnos");
    $statement->execute();
    $users=$statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- jquery -->
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <!-- DataTables JS library -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <!-- DataTables JBootstrap -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    
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
  </head>

<body>
<div class="container pt-3">
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo $user[0] ?></td>
                <td><?php echo $user[1] ?></td>
                <td><?php echo $user[2] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</body>
</html>