<?php
include ('cabecera.php');
include ('menu.php');
include ('cuerpo.php');
include ('pie.php');
include ('conexion.php');
$SQL = "SELECT * FROM comic c WHERE id=".$_GET['comic_id'];
$RS=mysqli_query($con,$SQL);

while($fila=mysqli_fetch_assoc($RS)){
	
echo "<div>";
echo "<h1>".$fila['titulo']."</h1>";
echo "&emsp;<img src="." ".$fila['portada']." width=15%><br>";
echo "<b>Autor:</b>"." ".$fila['autor']."<br>";
echo "<b>Sinopsis:</b>"." ".$fila['sinopsis']."<br>";
echo "<b>Año:</b>"." ".$fila['anyo']."<br>";
}
$SQL = sprintf("SELECT idgenero FROM generocomic where idcomic =".$_GET['comic_id']);
			$nume=1;
			if ($RS = mysqli_query($con, $SQL)) {

    		
    		while ($obj = mysqli_fetch_object($RS)) {
    		@$cosa=$cosa.",".$obj->idgenero;
        	
        	    		}
    		
    		
  
    		
			}
			echo "<b>Generos:</b> $cosa <br>";
$SQL = "SELECT * FROM comic c WHERE id=".$_GET['comic_id'];
$RS=mysqli_query($con,$SQL);
while($fila=mysqli_fetch_assoc($RS)){
echo "<b>Estado:</b>"." ".$fila['estado']."<br>";
echo "<b>Capitulos:</b>"." ".$fila['capitulos']."<br>";
echo "</div>";
}
?>