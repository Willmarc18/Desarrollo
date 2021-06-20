<?php 
    include 'conexion.php';
    $id=$_GET['id'];
    $delete="DELETE FROM usuarios WHERE id='".$id."'";
    mysqli_query($conexion,$delete);
    header('location:admin.php');
?>
