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
$libros = mysqli_query ($conection, "select ISBN, TITULO, A.Nombre, E.Nombre from libros L 
inner join autor A on L.ID_AUTOR = A.Id_autor
inner join editorial E on L.ID_EDITORIAL = E.Id_editorial") or
die ("Error al ejecutar el comando select" . mysqli_error($conection));

while ($valores = mysqli_fetch_array($libros)) {
echo "<tr> <td>$valores[0]</td>
<td>$valores[1]</td>
<td>$valores[2]</td>
<td>$valores[3]</td> </tr>";
}

?>
    
</body>
</html>