<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   $conexion = mysqli_connect("localhost", "root", "", "biblioteca") or
   die("Problemas con la conexión");

        mysqli_query($conexion, "insert into editorial(Id_editorial,Nombre) values 
                      ('$_REQUEST[Id_editorial]','$_REQUEST[Nombre]')")
     or die("Problemas en el select" . mysqli_error($conexion));

        mysqli_close($conexion);

  echo "<p>El registro fue exitoso </p>";
  ?>
</body>
</html>