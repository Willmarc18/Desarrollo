<?php 
    include 'conexion.php';
    $id=$_GET['id'];
    $consultaP="SELECT*FROM usuarios WHERE id='".$id."'";
    $resultadoP=mysqli_query($conexion,$consultaP);
        while ($filasP=mysqli_fetch_assoc($resultadoP)) {

?>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Krub:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

<div class="contenedor">
    <h1 class="titulo">Actualizacion de informacion</h1>
    <form class="ingreso">
        <div class="contenedor-campo">
            <input type="hidden" name="id" value="<?php echo $filasP['id'] ?>" required>
            <div class="campo">
                <label>Nombre: </label>
                <input class="casillas" type="text" name="nombre" value="<?php echo $filasP['usuario'] ?>" required>
            </div>
            <div class="campo">
                <label>Contraseña: </label>
                <input class="casillas" type="text" name="contraseña" value="<?php echo $filasP['contraseña'] ?>" required>
            </div class="campo">
            <div>
                <label>Correo: </label>
                <input class="casillas" type="text" name="email" value="<?php echo $filasP['email'] ?>" required>
            </div>
        </div>
            <input class="botonA" type="submit" name="" value="Actualizar">
    </form>
    <?php } ?>
</div>

<?php 
error_reporting(0);
    $idA=$_GET['id'];
    $user=$_GET['nombre'];
    $pass=$_GET['contraseña'];
    $email=$_GET['email'];
    if ($user!=null||$pass!=null||$email!=null) {
        $Update="UPDATE usuarios SET usuario='".$user."', contraseña='".$pass."', email='".$email."' WHERE id='".$idA."' ";
        mysqli_query($conexion,$Update);
        if ($user=1) {
            header("location:admin.php");
        }
    }
?>