<?php
session_start();
include("conexion.php");
if(isset($_SESSION['u_usuario'])){
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


	$modificar = " UPDATE tbl_clientes SET estado='$estado',municipio='$municipio',delegacion='$delegacion',colonia='$colonia',calle='$calle',numeroExterior='$numex',numeroInterior'$numin',codigoPostal='$postal' WHERE correo='$usuario'";

	$resultado = mysqli_query($con, $modificar);
	if (!$resultado) {
		echo '<script>
		alert("Error al modificar");
		window.history.go(-1);
		</script>';

	}else{
		echo '<script>
		alert("Se modificó tu cuenta");
		window.history.go(-2);
		</script>';
	}
	//Cerrar conexion
	mysqli_close($con);

}
