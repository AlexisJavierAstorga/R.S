<?php 
include 'conexion.php';
$correo = $_POST["email"];
$idProducto = $_POST["id"];
$txtNumero1 = $_POST["txtNumero1"];
$txtNumero3 = $_POST["totalsuma"];
$fecha = $_POST["fecha1"];

$insertar = "INSERT INTO tbl_inventarioventas (Correo, idProducto, cantidadProducto, totalVenta, fechaCompra) VALUES ('$correo', '$idProducto', '$txtNumero1', '$txtNumero3', '$fecha')";

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {

	echo '<script>
	alert("Error en la compra");
	window.history.go(-1);
	</script>';
}else{
	echo '<script>
	alert("Compra realizada satisfactoriamente");
	window.history.go(-1);
	</script>';
}

mysqli_close($conexion);
