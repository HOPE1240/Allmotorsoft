
   
<?php
    session_start();

    include 'conexion.php';

    $Correo = $_POST['correo'];
    $clave = $_POST ['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  Correo='$Correo' and clave= '$clave' ");

    if ( mysqli_num_rows($validar_login)> 0 ){
        $_SESSION['usuarios'] = $Correo;
        header("location: index.php");
        exit;
    }else{
        echo "no se encontro";
        exit;
    }
    ?>

    
