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

  $registros = mysqli_query($conexion, "select ISBN,TITULO,ID_AUTOR,ID_EDITORIAL
                        from libros") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "<tr> <td> Isbn:" . $reg['ISBN'] . "</td>";
    echo "Titulo:" . $reg['TITULO'] . "<br>";
    echo "ID_autor:" . $reg['ID_AUTOR'] . "<br>";
    echo "Id_editorial:" . $reg['ID_EDITORIAL'] . "<br>";
   
    echo "<br>";
    echo "<hr>";
  }

  mysqli_close($conexion);
  ?>


    
</body>
</html>