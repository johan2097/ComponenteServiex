<?php
 include 'action.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComponenteServiex</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-danger navbar-dark">
  <a class="navbar-brand" href="#">ComponenteServiex</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Contactanos</a>
      </li>
    </ul>
</div>
  
</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-10">
         <h3 class="text-center text-dark mt-2">Prueba de Desarrollo de ComponenteServiex</h3> 
         <h5 class="text-center text-dark mt-2">Aca se ejecutara los Codigos a trabajar para esta prueba</h5>
         <h5 class="text-center text-dark mt-2">Poniendo a prueba mis conocimientos</h5>
         <hr> <br><br>
         <?php if(isset($_SESSION['response'])){ ?>
         <div class="alert alert-<?= $_SESSION['res_type']; ?> 
         alert-dismissible text-center">
         <button type="button" class="close" data-dismiss="alert">&times;
         </button>
         <b><?= $_SESSION['response']; ?></b>
        </div>
         <?php } unset($_SESSION['response']);?>
         </div>
       </div>
       <div class="row">
       <div class="col-md-4">
         <h3 class="text-center text-danger">Agrega los datos Correspondientes</h3>
         <form action="action.php" method="post" enctype="multipart/form-data">
         <div class="form-group">
         <input type="hidden" name="id" value="<?= $id; ?>">
         <label for="exampleInputproducto">Departamento:</label>
           <input type="text" name="departamento" value="<?= $departamento; ?>"
           class="form-control" placeholder="Ingresa el departamento" required>
         </div>
         <div class="form-group">
         <label for="exampleInputreferencia">Ciudad:</label>
           <input type="text" name="ciudad" class="form-control" value="<?= $ciudad; ?>"
           placeholder="Ingresa la ciudad" required>
         </div>
         <div class="form-group">
         <label for="exampleInputprecio">Nombre:</label>
           <input type="text" name="nombre" class="form-control" value="<?=  $nombre; ?>"
           placeholder="Ingresa el nombre" required>
         </div>
         <div class="form-group">
         <label for="exampleInputpeso">Correo:</label>
           <input type="text" name="correo" class="form-control" value="<?=  $correo; ?>"
           placeholder="Ingresa el correo" required>
         </div>
         
         <div class="form-group">
            <?php if ($update==true){?>
            <input type="submit" name="update" class="btn btn-success
            btn-block" value="Reenviar" required>
            <?php } else{ ?>
               <input type="hidden" name="add"  value="<?= $photo;  ?>">
               <input type="submit" name="add" class="btn btn-danger btn-block"
               value="Enviar">
               <?php } ?>
            </div>
         </form>
       </div>
       
       <div class="col-md-8">
       <center>
           <img src="app.jpg" alt="">
        </center>
       </div>
       </div>
    </div>
    <footer id="sticky-footer" class="py-4 bg-danger text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; 2020</small>
    </div>
  </footer>
    
        
</body>
</html>