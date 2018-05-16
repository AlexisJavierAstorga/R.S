<?php
	require ('conexion.php');

	session_start();

	if(isset($_SESSION["id_usuario"])){
		header("Location: index_.php");
	}

	if(!empty($_POST))
	{
		$usuario = mysqli_real_escape_string($mysqli,$_POST['email']);
		$password = mysqli_real_escape_string($mysqli,$_POST['password']);
		$error = '';

		$sha1_pass = sha1($password);

		$conexion = "SELECT email, password FROM prueba1 WHERE email = '$usuario' AND password = '$sha1_pass'";
		$result=$mysqli -> query ($sql);
		$rows = $result ->num_rows;

		if($rows > 0) {
			$row = $result -> fetch_assoc ();
			$_SESSION['id_usuario'] = $row['email'];
			$_SESSION['tipo_usuario'] = $row['password'];

			header("location: index_.php");
			} else {
			$error = "El nombre o contraseña son incorrectos";
		}
	}
?>
