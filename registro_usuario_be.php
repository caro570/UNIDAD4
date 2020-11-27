<?php 

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];


$query = "INSERT INTO usuarios(nombre_completo,correo,clave) VALUES('$nombre_completo', '$correo', '$clave')";

//Verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

if (mysqli_num_rows($verificar_correo) > 0 ) {
  echo '
   <script>
       alert("Este correo ya esta registrado intenta con otro diferente");
       window.location = "registrarvista.html";
   </script>
  ';
  exit();
}

$ejecutar = mysqli_query($conexion, $query);



if ($ejecutar) {
	echo '
       <script>
            alert("Usuario alamacenado exitosamente");
            window.location = "loginvista.html";
       </script>
       ';
}else{
    echo '
       <script>
            alert("Intentalo de nuevo usuario no alamacenado");
            window.location = "loginvista.html";
       </script
       ';
}
   myqli_close($conexion);
 ?>