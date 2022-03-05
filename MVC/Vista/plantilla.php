<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="Vista/css/login.css">
<body>
    

      <div class="container">
        <h3 class="text-center py-3">LOGO</h3>

        <ul class="container nav nav-pills nav-justified">

        <?php if (isset($_GET["pagina"])): ?>

          <?php if ($_GET["pagina"]=="registro"): ?>
        <li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=registro">Registro</a>
				</li>
        <?php else: ?>
        <li class="nav-item">
					<a class="nav-link" href="index.php?pagina=registro">Registro</a>
				</li>
        <?php endif ?>

         <?php if($_GET["pagina"]=="ingreso"): ?>
				<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
				</li>
        <?php else: ?>
        <li class="nav-item">
					<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
				</li>
        <?php endif ?>

        <?php if ($_GET["pagina"]=="inicio"): ?>
				<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
				</li>
        <?php else: ?>
        <li class="nav-item">
					<a class="nav-link " href="index.php?pagina=inicio">Inicio</a>
				</li>
        <?php endif ?>

      <?php else: ?>

        <li class="nav-item">
					<a class="nav-link" href="index.php?pagina=registro">Registro</a>
				</li>
        <li class="nav-item">
					<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
				</li>
        <li class="nav-item">
					<a class="nav-link active " href="index.php?pagina=inicio">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=salir">Salir</a>
				</li>

        <?php endif ?>

        </ul>
      </div>
      <div class="container-fluid">
        <div class="container py-5">
      <?php 

      if (isset($_GET["pagina"])) {
        if ($_GET["pagina"] == "registro" ||
            $_GET["pagina"] == "ingreso" ||
            $_GET["pagina"] == "inicio" ||
            $_GET["pagina"] == "salir") {
              include "paginas/".$_GET["pagina"].".php";


        }
        else{
          include "paginas/error404.php";
        }
      }else{
	    Include "paginas/inicio.php";
      }       
      ?>
</body>
</html>