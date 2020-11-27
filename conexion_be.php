<?php  
 

  $conexion=mysqli_connect("localhost","root","","4unid_bd");

  if ($conexion) {
  	echo 'Conectado exitosamente a la Base de Datos';
  }else{
  	echo 'No se a podido conectar a la Base de Datos';
  }




?>