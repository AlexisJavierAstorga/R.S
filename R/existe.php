<?php
session_start();

$usuario=$_POST['email'];
$password=$_POST['password'];

include("conexion.php");

$proceso = $con->query("SELECT correo,password FROM tbl_clientes WHERE correo = '$usuario' AND password = '$password' ");

if($resultado = mysqli_fetch_array($proceso)){
  $_SESSION['u_usuario'] = $usuario;

  header("Location: index_.php");
    //echo "<script>alert('Bienvenido $usuario')</script>";

}else{
  header("Location: index.php");
  //echo"<script>alert('El correo o contraseña son incorrectos, vuelve a intentar')</script>";

}
 ?>
