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

    include 'conexion.php';

    
    $nombre_completo = $_POST['Nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    


    

    $query = "INSERT INTO usuarios(Nombre_completo, Correo, usuario, clave) 
                VALUES('$nombre_completo','$correo','$usuario','$clave')";

  
    
    $ejecutar = mysqli_query($conexion ,$query);
    
    if ($ejecutar) {
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "login.html";
        </script>
        
        ';
    }else{
        echo '
        <script>
            alert("Usuario no almacenado");
            window.location = "login.html";
        </script>

        ';
    }

    mysqli_close($conexion);


?>
</body>
</html>