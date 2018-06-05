<?php
include("conexion.php");
session_start();
$idProducto = $_POST["id1"];
$estado = $_POST["estados"];
//$municipio = $_POST["municipio"];
$delegacion = $_POST["delegacion"];
$colonia = $_POST["colonia"];
$calle = $_POST["calle"];
$numex = $_POST["numex"];
$numin = $_POST["numin"];
$postal = $_POST["postal"];
$txtNumero1 = $_POST["txtNumero1"];
$txtNumero3 = $_POST["totalsuma"];
$talla = $_POST["talla"];
$fecha = $_POST["fecha"];

$insertar = "INSERT INTO tbl_inventarioVentas (Cliente,Producto,talla,estado,delegacion,colonia,calle,numeroExterior,numeroInterior,codigoPostal,cantidadProducto,totalVenta,fechaCompra) VALUES ('".$_SESSION['id']."','$idProducto','$talla','$estado','$delegacion','$colonia','$calle','$numex','$numin','$postal','$txtNumero1','$txtNumero3','$fecha')";

$resultado = mysqli_query($con, $insertar);
if (!$resultado) {

	echo '<script>
	alert("Error en la compra");
	window.history.go(-1);
	</script>';
	mysqli_close($con);
}else{
	echo '<script>
	alert("Compra realizada satisfactoriamente");
	window.history.go(-1);
	</script>';
}
?>
