<?php
require 'config.php';
$rol=$_POST['rol'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$conexion=mysqli_connect(HOST,USER,PASS,DB);
if ($conexion){
    echo 'Conexión exitosa <br>';
}else{
    echo 'Error de conexion' . mysqli_connect_error();
   
}
$consulta= "INSERT into usuarios(rol,usuario,contraseña)VALUES('$rol','$usuario','$contraseña')";
$query=mysqli_query($conexion,$consulta);
if ($query){
    echo "Se ha guardado con éxito";
}else{
    echo "Error". mysqli_connect_error();
}
