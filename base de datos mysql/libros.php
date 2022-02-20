<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
   $conexion = mysqli_connect("localhost", "root", "", "biblioteca") or
   die("Problemas con la conexión");

        mysqli_query($conexion, "insert into libros(ISBN, TITULO, ID_AUTOR, ID_EDITORIAL) values 
                      ('$_REQUEST[ISBN]','$_REQUEST[TITULO]','$_REQUEST[AutorLibro]','$_REQUEST[EditorialLibro]')")
     or die("Problemas en el select" . mysqli_error($conexion));
        mysqli_close($conexion);

        

  echo "<p>El registro fue exitoso </p>";
  ?>



<form action="index.php" >

<input type="submit" name="submit" class="submit btn btn-success" value="Volver" id="submit_data" />
</body>
</html>