<?php
session_start();
include("conexion.php");
$correo = $_POST["email"];
$nombre = $_POST["username"];
$apellidoPaterno = $_POST["apellidoPat"];
$apellidoMaterno = $_POST["apellidoMat"];
$fechaNacimiento = $_POST["fecha"];
$password = $_POST["password"];
//$rpassword = $_POST["rpassword"];
$estado = $_POST["estados"];
$municipio = $_POST["municipio"];
$delegacion = $_POST["delegacion"];
$colonia = $_POST["colonia"];
$calle = $_POST["calle"];
$numex = $_POST["numex"];
$numin = $_POST["numin"];
$postal = $_POST["postal"];
//mysqli_select_db('rs') or die ("Error al conectar con la base de datos");

	$insertar = " INSERT INTO tbl_clientes (correo, nombre, apellidoPaterno, apellidoMaterno, fechaNacimiento, estado, municipio, delegacion, colonia, calle, numeroExterior, numeroInterior, codigoPostal, password) VALUES ('$correo','$nombre','$apellidoPaterno','$apellidoMaterno','$fechaNacimiento','$estado','$municipio','$delegacion','$colonia','$calle','$numex','$numin','$postal','$password')";

	$verificar_usuario = mysqli_query($con, "SELECT * FROM tbl_clientes WHERE correo = '$correo'");
	if (mysqli_num_rows($verificar_usuario) > 0){
		echo '<script>
		alert("El usuario ya esta registrado");
		window.history.go(-1);
		</script>';
		exit;
	}

	$resultado = mysqli_query($con, $insertar);
	if (!$resultado) {
		echo '<script>
		alert("Error al registrarse");
		window.history.go(-1);
		</script>';
		$borrar = mysqli_query($con,"DELETE FROM tbl_clientes WHERE IDCLI='' ");

	}else{
		echo '<script>
		alert("Ya estas registrado, prueba tu cuenta");
		window.history.go(-1);
		</script>';
	}
	//Cerrar conexion
	mysqli_close($con);
?>
