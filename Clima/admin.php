<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
    include('conexion.php');
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("location:index.php");
    }
    $consultaP="SELECT*FROM usuarios WHERE id>2";
    $resultadoP=mysqli_query($conexion,$consultaP);
    $iduser = $_SESSION['usuario'];
    $sql="SELECT usuario FROM usuarios WHERE usuario = '$iduser'";
    $result = $conexion->query($sql);
    $row = $result->fetch_assoc();
?>

    <h1 class="bienvenida">BIENVENIDO <?php echo utf8_decode($row['usuario']);?></h1>       
    <a class="cerrar" href="sesion.php">Cerrar sesion</a> 
    <div>
        <table class="contenedor__lista">
            <thead>
                <tr class="lista">
                    <th>ID</th>
                    <th>USUARIO</th>
                    <th>CONTRASEÑA</th>
                    <th>CORREO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                while ($filasP=mysqli_fetch_assoc($resultadoP)) {
                
            ?>
                <tr class="lista">
                    <td><?php echo $filasP['id'] ?></td>
                    <td><?php echo $filasP['usuario'] ?></td>
                    <td><?php echo $filasP['contraseña'] ?></td>
                    <td><?php echo $filasP['email'] ?></td>
                    <td>
                        <a class="botonU" href="actualizar.php?id=<?php echo $filasP['id'] ?>">Actualizar</a>
                        <a class="botonD" href="eliminar.php?id=<?php echo $filasP['id'] ?>">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div>
        <a class="agregar" href="agregar.php">Agregar</a>
    </div>
</body>
</html>