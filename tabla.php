<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla</title>
</head>
<body>
<table width="800" border="1">
	<form action="" method="POST">
    	<tr>
        	<th colspan="11"> TABLA DE MULTIPLICAR </th>
        </tr>
        <tr>
        	<th colspan="6" align="right">Primer valor</th>
            <th colspan="5" align="left"><input type="text" name="Primer_valor" 
            value="<?=$_POST['Primer_valor']?>" id="Primer_valor" /></th>
        </tr>
        <tr>
        	<th colspan="6" width="50%" align="right">Segundo valor</th>
            <th colspan="5" width="50%" align="left"><input type="text" name="Segundo_valor"
             value="<?=$_POST['Segundo_valor']?>" id="Segundo_valor" /></th>
        </tr>
        <tr>
        	<th colspan="11">
 
            		<input type="submit" name="btncrear" id="btncrear" value="CREAR" />
            </th>
        </tr>
	</form>
        <tr>
        	<td width="10%">X\Y</td>
            <td width="9%" bgcolor="#D8FE3F">1</td>
            <td width="9%" bgcolor="#D8FE3F">2</td>
            <td width="9%" bgcolor="#D8FE3F">3</td>
            <td width="9%" bgcolor="#D8FE3F">4</td>
            <td width="9%" bgcolor="#D8FE3F">5</td>
            <td width="9%" bgcolor="#D8FE3F">6</td>
            <td width="9%" bgcolor="#D8FE3F">7</td>
            <td width="9%" bgcolor="#D8FE3F">8</td>
            <td width="9%" bgcolor="#D8FE3F">9</td>
            <td width="9%" bgcolor="#D8FE3F">10</td>
        </tr>       
 
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
</table>
</body>
</html>