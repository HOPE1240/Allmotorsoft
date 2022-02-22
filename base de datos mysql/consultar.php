<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="centrar.css">
<body>

<div class="container" id="mi_tabla">

<table class="table -content-center" >
        <thead class="thead-dark">
          <tr>
            <th scope="col"> ISBN</th>
            
           
          </tr>
        </thead>

<?php
    $conexion = mysqli_connect("localhost", "root", "", "biblioteca") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select ISBN,ID_AUTOR,ID_EDITORIAL
                    from libros where TITULO ='$_REQUEST[titulo]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($valores = mysqli_fetch_array($registros)) {
        echo "<tr> <td>$valores[0]</td> </tr>";
    }
    mysqli_close($conexion);
?>


</body>
</html>