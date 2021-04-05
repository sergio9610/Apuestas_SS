<?php
// Se realiza la conexión con la base de datos
require 'conexion.php';

//Recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$telefono = $_POST["telefono"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);


//Consulta para insertar 
$insertar = "INSERT INTO `usuario`( `nombre`, `apellidos`, `correo`, `usuario`, `telefono`, `contrasena`) VALUES ('$nombre', '$apellidos', '$correo', '$usuario', '$telefono', '$password')"; 

//Se verifica que no se repita un nombre de ususario
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario ='$usuario'");
if(mysqli_num_rows($verificar_usuario) > 0){
	echo '<script>
			alert("El usuario ya está registrado");
			window.history.go(-1);
		 </script>';
	exit;	//termina la consulta
}

//Se verifica que no se repita correo electrónico
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$correo'");
if(mysqli_num_rows($verificar_correo) > 0){
	echo '<script>
			alert("El correo ya está registrado");
			window.history.go(-1);
		 </script>';
	exit;	//termina la consulta
}

//Ejecutar Consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
	echo 'Error al registrarse';
} else{
	echo '<script>
			alert("Se ha registrado exitosamente");
		 </script>';
	header("Location: login.php");	 
}
//Cerrar Conexion
mysqli_close($conexion);



 ?>