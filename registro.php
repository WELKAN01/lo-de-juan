<?php
//entrada
 $nombre=$_POST["txtNombre"];
 $apellido=$_POST["txtApellido"];
 $edad=$_POST["txtEdad"];
 $user=$_POST["txtUser"];
 $pass=$_POST["txtPass"];
$handle=fopen("registros.txt","a+");
$texto=$nombre."|".$apellido."|".$edad."|".$user."|".$pass.chr(50).chr(10);
fwrite($handle, $texto);
fclose($handle);
header("location:login.html");
?>
