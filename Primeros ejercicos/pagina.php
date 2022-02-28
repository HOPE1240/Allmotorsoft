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

echo "Tabla del 2 con el for";
  echo "<br>";
  for ($f = 2; $f <= 20; $f = $f +2) {
    echo $f;
    echo "-";
  }
  echo "<br>";
  echo "Tabla del 2 con el while";
  echo "<br>";
  $f = 0;
  while ($f <= 50) {
    echo $f;
    echo "-";
    $f = $f + 2;
  }
?>
    
</body>
</html>