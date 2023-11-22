<?php
include ('cabecera.php');
include ('menu.php');
include ('cuerpo.php');
include ('pie.php');
include ("security.php");
include ("conexion.php");

$SQL = "SELECT * FROM comic c ";

$RS=mysqli_query($con,$SQL);
$num=1;
echo "<a href=insertarcomic.php><img src='./add.png'width=50px></a>";
echo "<p style='text-align:right;'><a href=logout.php>Salir</a</p><br>";
echo "<table border=0>";
echo "<tr bgcolor=grey>";
	echo "<td>Id del comic</td>";
	echo "<td>Titulo</td>";
	echo "<td>Autor</td>";
	echo "<td>Estado</td>";
	echo "<td>Imagen</td>";
	echo "<td>Capitulos</td>";
	echo "</tr>";
while($fila=mysqli_fetch_assoc($RS)){

		
        	

	if ($num%2!=0) {
		
	
	echo "<tr>";
	

	
	echo "<td>".$fila['id']."</td>";
	echo "<td><a href=detalle.php?comic_id=".$fila['id'].">".$fila['titulo']."</a></td>";
	echo "<td>".$fila['autor']."</td>";
	echo "<td>".$fila['estado']."</td>";
	echo "<td><img src=".$fila['portada']." width=70px></td>";
	echo "<td>".$fila['capitulos']."</td>";
	
		
	
		
		

		
	
	
	echo "<td><a href=modificarcomic.php?comic_id=".$fila['id']."><img src='./edit_modify_icon.png' width=30px></a></td>";
	echo "<td><a href=eliminarcomic.php?comic_id=".$fila['id']."><img src='./eliminar.png' width=30px></a></td>";
	echo "</tr>";
	
	
	}
	
	elseif ($num%2==0) {

		
	echo "<tr bgcolor=lightgrey>";
	
	
	echo "<td>".$fila['id']."</td>";
	echo "<td><a href=detalle.php?comic_id=".$fila['id'].">".$fila['titulo']."</a></td>";
	echo "<td>".$fila['autor']."</td>";
	echo "<td>".$fila['estado']."</td>";
	echo "<td><img src=".$fila['portada']." width=70px></td>";
	echo "<td>".$fila['capitulos']."</td>";
		

		
	
	
		echo "<td><a href=modificarcomic.php?comic_id=".$fila['id']."><img src='./edit_modify_icon.png' width=30px></a></td>";
	echo "<td><a href=eliminarcomic.php?comic_id=".$fila['id']."><img src='./eliminar.png' width=30px></a></td>";
	echo "</tr>";
	
	}
	$num=$num+1;

	}

mysqli_close($con);
echo "</table>";
echo "$fila";

?>

