<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de datos del form</title>
</head>
<body>
    <?php
    echo " El nombre ingresado es: ";
    echo $_REQUEST ['nombre'];
    echo "<br>";

    if ($_REQUEST['edad'] >= 18) {
        echo " es mayor de edad";
    } else {

        echo " no es mayor de edad";
    
    }
    

    
    ?>
</body>
</html>