<?php
include ('cabecera.php');
include ('menu.php');
include ('cuerpo.php');
include ('pie.php');
include ('conexion.php');

$titulo=$_POST['titulo'];
$SQL = "SELECT * FROM comic where titulo like '%$titulo%'";
$RS=mysqli_query($con,$SQL);



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
echo "$fila";
?>

