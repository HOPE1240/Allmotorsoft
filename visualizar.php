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
</body>
</html>