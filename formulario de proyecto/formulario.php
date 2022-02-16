<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulario</title>
</head>
<link rel="stylesheet" href="juaz.css">
<body class="body" >
<?php
  $ar = fopen("ALLMOTORSOFT.xls", "a") or
    die("Problemas en la creacion");
    
  
  fputs($ar, $_REQUEST['fName']);
  fputs($ar, "\t");
  fputs($ar, $_REQUEST['datalName']);
  fputs($ar, "\t");
  fputs($ar, $_REQUEST['Numero']);
  fputs($ar, "\t");
  fputs($ar, $_REQUEST['Direccion']);
  fputs($ar, "\n");
  fclose($ar);
  
  ?>

  <?php
   //leer el archivo completo.  Cada nota se convierte en un elemento del array
	$datos=file("ALLMOTORSOFT.xls");
   // contar el número de pedidos en el array
	$num_registros=count($datos);
   if ($num_registros == 0)
   {
  echo "<p>Noy hay planilla de datos para mostrar</p>";
   }
   echo "<table class=\"table table-bordered table-dark\" align=center>\n";
   echo "<thead>";
   
   echo "<tr><th scope=\"col\">Nombre</td>
             <th scope=\"col\">Apellidos</td>
             <th scope=\"col\">Numero celular</td>
             <th scope=\"col\">Direccion</td>
         <tr>";
         echo "</thead>";
   for ($i=0; $i<$num_registros; $i++)
   {
      //cortar cada línea
      $linea = explode( "\t", $datos[$i] );

      echo "<tr>
               <td>$linea[0]</td>
                <td>$linea[1]</td>
                <td align = center>$linea[2]</td>
                <td align = center>$linea[3]</td>
            </tr>";
   }
   echo "</table>";
?>
<form action="formulario.html" >

<input type="submit" name="submit" class="submit btn btn-success" value="Volver" id="submit_data" />


</form>

  
</body>
</html>