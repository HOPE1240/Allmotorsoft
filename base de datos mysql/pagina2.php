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
<body class="body">
<?php
  $conexion = mysqli_connect("localhost", "root", "", "biblioteca") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into editorial(Nombre) values 
                       ('$_REQUEST[Nombre]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "<p>El registro fue exitoso </p>";
  ?>

<?php
 /* $ar = fopen("Prueba.txt", "a") or
    die("Problemas en la creacion");
    
  
  fputs($ar, $_REQUEST['nombre']);
  fputs($ar, "\t");
  fputs($ar, $_REQUEST['mail']);
  fputs($ar, "\n");
  fclose($ar);
  
  ?>

<?php
   //leer el archivo completo.  Cada nota se convierte en un elemento del array
	$datos=file("Prueba.txt");
   // contar el número de pedidos en el array
	$num_registros=count($datos);
   if ($num_registros == 0)
   {
  echo "<p>Noy hay planilla de datos para mostrar</p>";
   }
   echo "<table class=\"table table-bordered table-dark\" align=center>\n";
   echo "<thead>";
   echo "<h1> Lista de alumnos </h1>";
   echo "<tr><th scope=\"col\">Nombre</td>
             <th scope=\"col\">Mail</td>
         <tr>";
         echo "</thead>";
   for ($i=0; $i<$num_registros; $i++)
   {
      //cortar cada línea
      $linea = explode( "\t", $datos[$i] );

      echo "<tr>
               <td>$linea[0]</td>
                <td>$linea[1]</td>
            </tr>";
   }
   echo "</table>";
   */
?>

<form action="index.html" >

<input type="submit" name="submit" class="submit btn btn-success" value="Volver" id="submit_data" />
</body>
</html>