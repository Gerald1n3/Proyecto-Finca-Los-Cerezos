<?php
require "config.php";
$rol=$_POST["rol"];
$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];
if ($conexion){
    echo "Conexión exitosa";
}else{
    echo 'Error de conexion' . mysqli_connect_error();
   
}
$consulta= "INSERT into usuarios(rol,usuario,contraseña)VALUES('$rol','$usuario','$contraseña')";
$query=mysqli_query($conexion,$consulta);
if ($query){
    echo "<script> alert('Usuario registrado con éxito');window.location='principal.html'</script>";
}else{
    echo "Error". mysqli_connect_error();
}
  

