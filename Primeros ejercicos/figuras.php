<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

    

    $numero= 8;
    $a = 0;
    while ($a <= 10) {
        echo "<hr width =  $numero>";
        $numero = $numero +40;
        $a ++;
    } 

    echo "<br><hr width>"; 

    $numero = 8;
    $a = 0;
    $f = 0;

    while ($f <= 10) {

        while ($a <= 16) {
            echo "<hr width = $numero>";
            $numero = $numero + 40;
            $a ++;
        }
        
        echo "<hr width = $numero>";
        $f ++;
    }
    echo "<br><hr width>";
    for ($i=1; $i <= 3 ; $i++) { 

        $numero = 8;
        $a = 0;

        while ($a <= 14) {
            echo "<hr width = $numero>";
            $numero = $numero + 40;
            $a++;
           
        }
    }
    $numero = 30;
    $a = 0;
    while ($a <= 8) {
        echo "<hr width =$numero>";
        $a ++;
    
    }

    echo "<br><hr width>";


    ?>
</body>
</html>