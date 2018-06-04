<?php
session_start();
include("conexion.php");
if(isset($_SESSION['u_usuario'])){
$correo = $_POST["email"];
$delegacion = $_POST["delegacion"];
$colonia = $_POST["colonia"];
$calle = $_POST["calle"];
$numex = $_POST["numex"];
$numin = $_POST["numin"];
$postal = $_POST["postal"];
$password = $_POST["password"];
$passwordnew = $_POST["passwordnew"];
//mysqli_select_db('rs') or die ("Error al conectar con la base de datos");

	$modificar = " UPDATE tbl_clientes SET colonia='$colonia', delegacion='$delegacion', calle='$calle', numeroExterior='$numex', numeroInterior='$numin', codigoPostal='$postal', correo='$correo' WHERE correo='".$_SESSION["u_usuario"]."'";

	$resultado=$con->query($modificar);

	if ($resultado) {
		echo '<script>
		alert("Se modificó tu cuenta, vuelve a iniciar sesión para ver los datos modificados en tu perfil");
		window.history.go(-1);
		</script>';
	}else{
		echo '<script>
		alert("Error al modificar");
		window.history.go(-1);
		</script>';
		mysqli_close($con);
	}
$modificar2 = " UPDATE tbl_clientes SET password='$passwordnew' WHERE correo='".$_SESSION["u_usuario"]."'";
	$resultado2=$con->query($modificar2);
	if ($resultado2) {
			echo '<script>
			alert("Tu contraseña ha cambiado");
			window.history.go(-1);
			</script>';
	}else{
		echo '<script>
		alert("Tu password antiguo no coinside");
		window.history.go(-1);
		</script>';
		mysqli_close($con);
	}

	//Cerrar conexion
}
?>
