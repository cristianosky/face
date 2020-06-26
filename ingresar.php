<?php
    include ("conexion.php");

   $cor= $_POST["correo"];
   $pas=$_POST["password"];

   $insertar= "INSERT INTO login(correo, pass) VALUES ('$cor','$pas')";

   $resultado = mysqli_query($conex, $insertar);
   
   if($resultado){
    header("location:red.php");
   }
?>