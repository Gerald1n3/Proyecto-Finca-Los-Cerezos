<?php 

require_once "config.php";

$rol=$_POST["rol"];
$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];
$query=mysqli_query($conexion,"SELECT * FROM usuarios WHERE rol='$rol' and usuario='$usuario' and contraseña='$contraseña'");
$nr=mysqli_num_rows($query);
if ($nr>0)
{
    $data=mysqli_fetch_array($query);
    session_start();
    $_SESSION['active']=true;
    $_SESSION['rol']=$data['rol'];
    $_SESSION['usuario']=$data['usuario'];
    $_SESSION['contraseña']=$data['contraseña'];
    header("location: http://www.google.com");
    
    
}else {
    echo "incorrecto ";
    
}