<?php 
include 'conexion.php';
$correo = $_POST["email"];
$nombre = $_POST["username"];
$apellidoPaterno = $_POST["apellidoPat"];
$apellidoMaterno = $_POST["apellidoMat"];
$fechaNacimiento = $_POST["fecha1"];
$direccion = $_POST["direccion"];
$password = $_POST["password"];


$insertar = "INSERT INTO tbl_clientes (correo, nombre, apellidoPaterno, apellidoMaterno, fechaNacimiento, direccion, pass) VALUES ('$correo', '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$fechaNacimiento','$direccion','$password')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM tbl_clientes WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_usuario) > 0){
	echo '<script>
	alert("El usuario ya esta registrado");
	window.history.go(-1);
	</script>';
	exit;
}

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {

	echo '<script>
	alert("Error al registrarse");
	window.history.go(-1);
	</script>';
}else{
	echo '<script>
	alert("Usuario registrado exitosamente");
	</script>';
}
header('Location: /R.S.%20Textil/index_.php');
//Cerrar conexion
mysqli_close($conexion);
