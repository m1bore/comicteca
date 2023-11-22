<?php
include ('cabecera.php');
include ('menu.php');
include ('cuerpo.php');
include ('pie.php');
$genero=$_REQUEST['genero'];
include ("conexion.php");

$SQL = "SELECT * FROM comic c, generocomic g where c.id=g.idcomic and idgenero like '%$genero%'";
$RS=mysqli_query($con,$SQL);

echo "<table border=1 >";
$num=1;
while($fila=mysqli_fetch_assoc($RS)){
	if ($num==1) {
		echo "<h2>Estas viendo el genero:"." ".$fila['idgenero']."</h2><br>";
		$num=$num+1;
	}
	
?>	
		
	<p style="display: inline-block; width: 25%;text-align:center">
<?php
	
	
	
	echo "<a href=detalle.php?comic_id=".$fila['idcomic']."><img src=".$fila['portada']." width=200px height=300px></a><br>";

	echo "<a href=detalle.php?comic_id=".$fila['idcomic'].">".$fila['titulo']."</a>";
	
	
	echo "</p>";
	
		
	
	
	}


echo "</table>";
mysqli_close($con);

?>

