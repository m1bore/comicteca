<?php
include ('cabecera.php');
include ('menu.php');
include ('cuerpo.php');
include ('pie.php');
if (!Isset ($_POST['Enviar'])) {
?>  
<form action="registro.php" method="POST">
  <table align="center" width="225" cellspacing="2" cellpadding="2" border="0">
    <tr>
      <td colspan="2" align="center"</td>
    </tr>
    <tr>
      <td align="right" >Usr:</td>
      <td><input name="usuario" type="Text" maxlength="50"></td>
    </tr>
    <tr>
      <td align="right" >Email:</td>
      <td><input name="email" type="Text" maxlength="50"></td>
    </tr>
    <tr>
      <td align="right">Pwd:</td>
      <td><input name="pass" type="password"  maxlength="50"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="Enviar" type="Submit" value="Enviar"></td>
    </tr>
  </table>





  <?php
}
else {
  $usuario=$_REQUEST['usuario'];
  $email=$_REQUEST['email'];
  $password=md5($_POST["pass"]);
  $admin="no";

  $con = mysqli_connect("localhost","root","comomola","comicteca") or die("No se pudo abrir la conexión: " . mysqli_connect_error());



  $SQL= "INSERT INTO usuarios VALUES( '$usuario', '$email',  '$password','$admin' )";
  
  if(mysqli_query($con,$SQL)){ 
  echo "Se insertaron los datos con exito<br>";
  header ("Location: index.php");
  }
}
?>