<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
    include('conexion.php');
    session_start();
        if (!isset($_SESSION['usuario'])) {
            header("location:index.php");
    }
    $consultaP="SELECT*FROM usuarios";
    $resultadoP=mysqli_query($conexion,$consultaP);
    $iduser = $_SESSION['usuario'];
    $sql="SELECT usuario FROM usuarios WHERE usuario = '$iduser'";
    $result = $conexion->query($sql);
    $row = $result->fetch_assoc();
        
?>
<a class="cerrar" href="crud/sesion.php">Cerrar sesion</a> 
<div class="contenedor-cliente">
    <h1 class="bienvenida">Bienvenido <?php echo utf8_decode($row['usuario']);?></h1>
    <div>
        <table class="contenedor__lista">
            <thead>
                <tr class="lista">
                    <th>ID</th>
                    <th>USUARIO</th>
                    <th>CORREO</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                while ($filasP=mysqli_fetch_assoc($resultadoP)) {
                
            ?>
                <tr class="lista">
                    <td><?php echo $filasP['id'] ?></td>
                    <td><?php echo $filasP['usuario'] ?></td>
                    <td><?php echo $filasP['email'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="campo">
        <label>Mensaje</label>
        <textarea></textarea>
    </div>
    <div>
        <a class="botonU" href="cliente.php">Enviar</a>
    </div>
</div>
    
</body>
</html>