<?php 
include 'conexion.php';
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];

//Consulta para insertar datos
$insertar = "INSERT INTO usuario (nombre, edad) VALUES ('$nombre', '$edad')";

//Verificar si hay usuarios repetidos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE nombre = '$nombre'");
if (mysqli_num_rows($verificar_usuario) > 0){
	echo '<script>
	alert("El usuario ya esta registrado");
	window.history.go(-1);
	</script>';
	exit;
}

//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {

	echo '<script>
	alert("Error al registrarse");
	</script>';
}else{
	echo '<script>
	alert("Usuario registrado exitosamente");
	</script>';
}
//Cerrar conexion
mysqli_close($conexion);
