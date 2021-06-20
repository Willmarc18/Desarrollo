<link rel="stylesheet" href="css/style.css">
<div class="contenedor">
    <h1 class="titulo">Agregar Usuario</h1>
    <form>
        <div class="campo">
            <label>Usuario</label>
            <input class="casillas" type="text" name="usuario" placeholder="Ingresar usuario" required>
        </div>
        <div class="campo">
            <label>Contraseña</label>
            <input class="casillas" type="password" name="contraseña" placeholder="Ingresar contraseña" required>
        </div>
        <div class="campo">
            <label>Correo</label>
            <input class="casillas" type="text" name="email" placeholder="Ingresar correo"required>
        </div>
        <div class="campo">
            <label>Cargo</label>
            <input class="casillas" type="text" name="id_cargo" value="2" required> 
        </div>
        <input class="botonU" type="submit" name="" value="Agregar">
        <a class="regresar" href="admin.php">Regresar</a>
    </form>
</div>
<?php 
    error_reporting(0);
    include 'conexion.php';
    $userA=$_GET['usuario'];
    $passA=$_GET['contraseña'];
    $emailA=$_GET['email'];
    $id_cargo=$_GET['id_cargo'];
    if ($userA!=null||$passA!=null||$emailA!=null||$id_cargo!=null) {
        $agregar="INSERT INTO usuarios(usuario,contraseña,email,id_cargo) VALUES('".$userA."','".$passA."','".$emailA."','".$id_cargo."')";
        mysqli_query($conexion,$agregar);
        if ($userA=1) {
            header("location:admin.php");
        }
    }
?>