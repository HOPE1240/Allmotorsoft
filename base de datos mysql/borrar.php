<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="centrar.css">
<body>
<?php
    $conexion = mysqli_connect("localhost", "root", "", "biblioteca") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select ISBN
                    from libros where TITULO ='$_REQUEST[titulo]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "delete from libros where TITULO='$_REQUEST[titulo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
        echo "Se efectuó el borrado del libro con dicho titulo.";
    } else {
        echo "No existe un alumno con ese mail.";
      }
      mysqli_close($conexion);
?>       
</body>
</html>