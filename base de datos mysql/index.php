<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<link rel="stylesheet" href="centrar.css">
<body class="body">

  

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Biblioteca</a>
        <img src="box2.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="pagina1.html"> Registrar autor <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="librosformulario.php"> registrar libros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="editorial.html"> registrar editorial</a>
            </li>
          </ul>
        </div>
      </nav>
      
      
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col"> ISBN</th>
            <th scope="col"> Titulo</th>
            <th scope="col"> Autor</th>
            <th scope="col"> Editorial</th>
          </tr>
        </thead>
    
    


    <?php
    
        $conection = mysqli_connect("localhost", "root", "", "biblioteca") or
        die ("Error al conectar con la base de datos");

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

    </table>
    
</body>
</html>