<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="centrar.css">
<body class="body">
    <div class="container">
        <h1>Registro de libros</h1>
        <div>
        <div ></div>
        </div>
        
        <form id="regiration_form" novalidate action="libros.php" method="post">
        <fieldset>
    
        <div class="form-group">
        <label for="fName">ISBN</label>
        <input type="text" class="form-control" name="ISBN"  placeholder="ISBN"  >
    
        </div>
        <div class="form-group">
        <label for="lName">TITULO</label>
        <input type="text" class="form-control" name="TITULO"  placeholder="TITULO" >

        <?php
              $conection = mysqli_connect("localhost", "root", "", "biblioteca") or
              die("Problemas con la conexion");
              echo "<select name='AutorLibro'>";
              $opciones = mysqli_query ($conection, "select * from autor");
              while ($valores = mysqli_fetch_array($opciones)) {
                echo '<option value="'.$valores[Id_autor].'">'.$valores[Nombre].'</option>';
              }
              echo "</select>";

              echo "<select name='EditorialLibro'>";
              $opciones = mysqli_query ($conection, "select * from editorial");
              while ($valores = mysqli_fetch_array($opciones)) {
                echo '<option value="'.$valores[Id_editorial].'">'.$valores[Nombre].'</option>';
              }
              echo "</select><br>";
            ?>

            <br>
    
    
    
        <input type="submit" name="submit" class="submit btn btn-success"  value="Enviar" id="submit_data" />
        
        </fieldset>
</body>
</html>