<?php
 include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<hr>
<h3 class="text-center text-dark mt-2">Bases de datos</h3>
<center>
<div class="col-md-8">
         <?php
            $query="SELECT * FROM producto";
            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result=$stmt->get_result();
            ?>
             <h3 class="text-center text-danger">Lo podras ver a continuacion</h3>
             <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>Departamento</th>
        <th>Ciudad</th>
        <th>Nombre</th>
        <th>Ciudad</th>
        <th>Acciones</th>
        

      </tr>
    </thead>
    <tbody>
      <?php while($row=$result->fetch_assoc()){?>
      <tr>
        <td><?= $row['id'];?></td>
        <td><?= $row['departamento'];?></td>
        <td><?= $row['ciudad'];?></td>
        <td><?= $row['nombre'];?></td>
        <td><?= $row['correo'];?></td>
        
        <td>
        <a href="action.php?delete=<?= $row['id']; ?>" class="badge 
        badge-danger p-2" onclick="return confirm('Estas Seguro de Eliminarlo')";>Eliminar</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<div align="center">
<a href="index.php">
<button class="btn btn-danger" type="submit">Volver al inicio</button>
</a>
</div>
</center>
</body>
</html>