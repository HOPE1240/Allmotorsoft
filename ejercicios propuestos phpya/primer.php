<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

$numero = 1;	
$dato1 = $_POST['Primer_valor'];
$dato2 = $_POST['Segundo_valor'];
$total = $dato1*$dato2;
for($i = 1; $i < 11; $i++){
    echo "<tr>";
        echo "<td width='10%' bgcolor='#D8FE3F'>".$i."</td>";
        for($j = 1; $j <= 10; $j++){
            if((($numero * $j) == $total) and ($numero == $dato2)){
                echo "<td width='9%' style='color:red;'>".$numero * $j."</td>";  
            } else {
                echo "<td width='9%'>".$numero * $j."</td>";  		
            }
        }		
        $numero++;			
    echo "</tr>";
}	

    ?>

</body>
</html>