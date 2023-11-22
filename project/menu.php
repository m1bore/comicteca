<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li>
							<form class="Buscar" method="post" action="busqueda.php">
									<input type="text" name="titulo" placeholder="Buscar" />
								</form></li>
								<li>
								<style type="text/css">
									#menu * { list-style:none;color:#222;}
									#menu li{ line-height:180%;}
									#menu li a{color:#222; text-decoration:none;}
									
									#menu input[name="list"] {
									  position: absolute;
									  left: -1000em;
									  }
									
									#menu input:checked ~ label:before{ content:"\025be";}
									#menu .interior{display: none;}
									#menu input:checked ~ ul{display:block;}
									</style>
									<ul>
   									<li><input type="checkbox" name="list" id="nivel1-1"><label for="nivel1-1">Generos:</label>
   									<ul class="interior">
   										<?php
										include ('conexion.php');
										$SQL = "SELECT * FROM generos";
										$RS=mysqli_query($con,$SQL);
										while($fila=mysqli_fetch_assoc($RS)){
									    echo "<li><a href=generos.php?genero=".$fila['nombre'].">".$fila['nombre']."</a></li>";
 											 }
 										  
									mysqli_close($con);
									?>
									</ul>	
          							</ul>
          						</style>
          					</li>
							<li><a href="index.php">Home</a></li>
								<?php
								if($conectado != "SI")
								{
								?>
							<li><a href="inicio.php">Iniciar sesión</a></li>
								<?php
								}
								?>
							<li><a href="listado.php">Administrar</a></li>
								<?php
								if($conectado != "SI")
								{
								?>
							<li><a href="registro.php">Registrarse</a></li>
								<?php
								}
								?>
								<?php
								if($conectado == "SI")
								{
								?>
								<li><a href="logout.php">Cerrar sesión</a></li>
								<?php
								}
								?>
						</ul>
					</nav>
