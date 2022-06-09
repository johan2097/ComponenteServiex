<?php
   $conn = new mysqli("localhost","root","","crudphp");

   if($conn ->connect_error){
       die("¡No podemos conectarnos a la base de datos!" .$conn ->connect_error);
   }
?>