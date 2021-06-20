<?php 
error_reporting(0);
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include('conexion.php');

$consulta="SELECT*FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña' ";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1) { //administrador
    header("location:admin.php");

}else 
if($filas['id_cargo']==2) { //cliente
    header("location:cliente.php");
}
else {
    ?>
    <?php 
    include("index.php");
    ?>
    <h1 class="bad">Error en la autenticacion</h1>
    <?php 
}
mysqli_free_result($resultado);
mysqli_close($conexion);