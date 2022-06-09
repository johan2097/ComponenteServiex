<?php
  session_start();
  include 'config.php';

  $update=false;
  $id="";
  $departamento="";
  $ciudad="";
  $nombre="";
  $correo="";
  
  
  if(isset($_POST['add'])){
     $departamento=$_POST['departamento'];
     $ciudad=$_POST['ciudad'];
     $nombre=$_POST['nombre'];
     $correo=$_POST['correo'];
     

     $query="INSERT INTO producto(departamento,ciudad,nombre,correo)VALUES(?,?,?,?)";
     $stmt=$conn->prepare($query);
     $stmt->bind_param("ssss",$departamento,$ciudad,$nombre,$correo);
     $stmt->execute();

     header('location:tabla.php');
     $_SESSION['response']="¡Se ha Ingresado correctamente a la base de datos!";
     $_SESSION['res_type']="success";
  }

  if(isset($_GET['delete'])){
     $id=$_GET['delete'];

     $query="DELETE FROM producto WHERE id=?";
     $stmt=$conn->prepare($query);
     $stmt->bind_param("i",$id);
     $stmt->execute();
     header('location:tabla.php');
     $_SESSION['response']="¡Se ha Eliminado correctamente!";
     $_SESSION['res_type']="danger";
  }

  if(isset($_GET['edit'])){
   $id=$_GET['edit'];

   $query="SELECT * FROM producto WHERE id=?";
   $stmt=$conn->prepare($query);
   $stmt->bind_param("i",$id);
   $stmt->execute();
   $result=$stmt->get_result();
   $row=$result->fetch_assoc();

   $id=$row['id'];
   $nombreproducto=$row['nombreproducto'];
   $referencia=$row['referencia'];
   $precio=$row['precio'];
   $peso=$row['peso'];
   $categoria=$row['categoria'];
   $stock=$row['stock'];
   $fechacreacion=$row['fechacreacion'];
   $fechaventa=$row['fechaventa'];

   $update=true;

   

}

if(isset($_POST['update'])){
   $nombreproducto=$_POST['nombreproducto'];
   $referencia=$_POST['referencia'];
   $precio=$_POST['precio'];
   $peso=$_POST['peso'];
   $categoria=$_POST['categoria'];
   $stock=$_POST['stock'];
   $fechacreacion=$_POST['fechacreacion'];
   $fechaventa=$_POST['fechaventa'];

   
   $query="UPDATE registro SET nombreproducto=?,referencia=?,precio=?,peso=?,categoria=?,stock=?,fechacreacion=?,fechaventa=? WHERE id=?";
   $stmt=$conn->prepare($query);
   $stmt->bind_param("ssssi","ssss",$departamento,$ciudad,$nombre,$correo,$id);
   $stmt->execute();

   $_SESSION['response']="Cargado Exitosamente!";
   $_SESSION['res_type']="primary";
   header('location:tabla.php');

}


?> 