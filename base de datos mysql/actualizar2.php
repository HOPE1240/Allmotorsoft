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
<div ></div>
    </div>
    <?php

$conexion = mysqli_connect("localhost", "root", "", "biblioteca") or
die("Problemas con la conexión");

$registros = mysqli_query($conexion, "select * from libros where TITULO ='$_REQUEST[titulo]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {

    ?>

<form action="actualizar3.php" method="post">
<div class="form-group">

    
<h1>Ingrese nuevo titulo</h1>
      <label for="Id">Titulo nuevo del libro</label>
      <input type="text" class="form-control" name="TituloNuevo" value="<?php echo $reg['titulo'] ?>">
      <br>
      <input type="hidden" name="TituloViejo" value="<?php echo $reg['titulo'] ?>">
      <input type="submit" class="submit btn btn-success" value="Modificar">
    </form>

    <?php

    } else
    echo "No existe libro con dicho titulo";
    ?>

</body>
</html>