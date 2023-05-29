<?php
//inicializar sesion
session_start();
include_once 'conexion.php';
include_once 'login.php';

$host ="localhost";
$dbname="dbclasepoo";
$usuario="root";
$contrasena="";
$conexion = new ConexionPDO($host, $dbname, $usuario,$contrasena);
$conexion->conectar();


if($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['user'];
    $password = MD5($_POST['pwd']);

    $login = new Login ($conexion);

    if ($login->login($user, $password)){
      // sesion
      $_SESSION['usuario']=$user;

header("Location: dash.php");
exit();
    } else{
      $error_message="Nombre de usuario o contraseña incorrectos";
      echo '<script>alert("Nombre de usuario o contraseña incorrectos")</script>';
    }
}

$conexion->desconectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="./styles/styles.css" />
</head>
<body>
<div class="login-container">
    <h2>Iniciar sesión</h2>
    <form  action="" method="POST">
      <label for ="user">Nombre de usuario:</label>
      <input type="text"  name="user" required placeholder="Ingrese su nombre de usuario">
      <label for ="pwd" >Contraseña:</label>
      <input type="password"  name="pwd" required placeholder="Ingrese su contraseña">
      <input type="submit" value="Entrar">
    </form>
  </div>
</body>
</html>
