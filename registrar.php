<?php 
include 'conexion_be.php';
session_start();
$correo=$_POST['correo'];
$clave=$_POST['clave'];
$entrar=$conexion ->query("SELECT * FROM usuarios WHERE correo='$correo', clave='$clave'");
$check=mysqli_query($conexion,$registrar);
if (mysqli_fetch_array($check)) {
	header("location:Principal.php");
}else{
	ob_start();
	$_SESSION['s_correo']=$correo;
	header("location:Principal.php");
}





 ?>