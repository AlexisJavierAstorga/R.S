<?php
session_start();

$usuario=$_POST['email'];
$password=$_POST['password'];

include("conexion.php");

$proceso = $con->query("SELECT * FROM tbl_clientes WHERE correo = '$usuario' AND password = '$password' ");

if($resultado = mysqli_fetch_array($proceso)){

  $_SESSION['id'] = $resultado['IDCLI'];

  $_SESSION['u_usuario'] = $resultado['correo'];
  $_SESSION['nombre'] = $resultado['nombre'];
  $_SESSION['apellidoPat'] = $resultado['apellidoPaterno'];
  $_SESSION['apellidoMat'] = $resultado['apellidoMaterno'];
  $_SESSION['fecha'] = $resultado['fechaNacimiento'];
  $_SESSION['estado'] = $resultado['estado'];
  $_SESSION['municipio'] = $resultado['municipio'];
  $_SESSION['delegacion'] = $resultado['delegacion'];
  $_SESSION['colonia'] = $resultado['colonia'];
  $_SESSION['calle'] = $resultado['calle'];
  $_SESSION['numex'] = $resultado['numeroExterior'];
  $_SESSION['numin'] = $resultado['numeroInterior'];
  $_SESSION['postal'] = $resultado['codigoPostal'];
  $_SESSION['password'] = $resultado['password'];

  header("Location: index_.php");
    //echo "<script>alert('Bienvenido $usuario')</script>";

}else{
  echo '<script>
  alert("Correo o contraseña incorrecto");
  window.history.go(-1);
  </script>';
  mysqli_close($con);
}
