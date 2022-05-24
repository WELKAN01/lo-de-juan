<?php
session_start();
$user=$_POST["txtUser"];
$pass=$_POST["txtPass"];
$handle = fopen("registros.txt","r");
$todo   = fread($handle, filesize("registros.txt"));
$lineas = explode(chr(13).chr(10),$todo);
for($i=0;$i<count($lineas);$i++){
    $palabra = explode("|",$lineas[$i]);
    if($user==$palabra[3] && $pass==$palabra[4]){
        //echo "<h2>Bienvenido Sr.:".$palabra[0].",".$palabra[1]."</h2>";
        $_SESSION['username']=$user;
        $_SESSION['nombre']=$palabra[0];
        $_SESSION['apellido']=$palabra[1];
        header("location:index.php");
        $bandera = 1;
        break;
    }else{
        $bandera = 0;
        header("location:error.php");
    }
}
      
?>