<?php
require 'config.php';
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$fecha=$_POST['fecha'];

$conexion=mysqli_connect(HOST,USER,PASS,DB);
if ($conexion){
    echo 'Conexión exitosa <br>';
}else{
    echo 'Error de conexion' . mysqli_connect_error();
   
}
$consulta= "INSERT into crud(codigo,nombre,precio,cantidad,fecha)VALUES('$codigo','$nombre','$precio','$cantidad','$fecha')";
$query=mysqli_query($conexion,$consulta);
if ($query){
    echo "Se ha guardado con éxito";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="d-grid gap-2 col-6 mx-auto">
    <br><a href="listarfinal.php" class="btn btn-primary">Listar productos</a>
    </div>
    </body>
    </html>
    
    <?php
}else{
    echo "Error". mysqli_connect_error();
}