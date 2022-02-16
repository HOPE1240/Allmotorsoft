<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
   $conexion = mysqli_connect("localhost", "root", "", "biblioteca") or
   die("Problemas con la conexión");

        mysqli_query($conexion, "insert into libros(ISBN, TITULO) values 
                      ('$_REQUEST[ISBN]','$_REQUEST[TITULO]')")
     or die("Problemas en el select" . mysqli_error($conexion));

        mysqli_close($conexion);

        

  echo "<p>El registro fue exitoso </p>";
  ?>



<form action="libros.html" >

<input type="submit" name="submit" class="submit btn btn-success" value="Volver" id="submit_data" />
</body>
</html>