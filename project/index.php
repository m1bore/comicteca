<?php
include ('cabecera.php');
include ('menu.php');
include ('cuerpo.php');


include ('conexion.php');
$SQL = "SELECT * FROM comic order by rand() limit 8";
$RS=mysqli_query($con,$SQL);
echo "<table border=1 >";

while($fila=mysqli_fetch_assoc($RS)){
	
?>	
		
	<p style="display: inline-block; width: 25%;text-align:center;">
		<?php
	
	
	
	echo "<a href=detalle.php?comic_id=".$fila['id']."><img src=".$fila['portada']." width=200px height=300px></a><br>";

	echo "<a href=detalle.php?comic_id=".$fila['id'].">".$fila['titulo']."</a>";
	
	
	echo "</p>";
		
	
		

		

		
	
	
	
	
	}

mysqli_close($con);
echo "</table>";
include ('pie.php');
echo "$fila";
?>

