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
 $registros = mysqli_query($conexion, "select Id_editorial, Nombre from editorial") or
    die("Problemas en el select:" . mysqli_error($conexion));
  while ($regEditoriales = mysqli_fetch_array($registros)) {
    echo "Codigo: " . $regEditoriales['Id_editorial'];
    echo "<br>";
    echo "Nombre: " . $regEditoriales['Nombre'] . "<br>";
    echo "\n";
    echo "<hr>";
  }
  mysqli_close($conexion);
  ?>
    
</body>
</html>