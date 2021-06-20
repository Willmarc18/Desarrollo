<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Krub:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Sistema login</h1>
        <form class="ingreso" action="validar.php" method="POST">
            <div class="contenedor-campo">
                <div class="campo">
                    <label>Usuario</label>
                    <input class="casillas" type="text" name="usuario" placeholder="Ingresar usuario" required>
                </div class="campo">
                <div>
                    <label>contraseña</label>
                    <input class="casillas" type="password" name="contraseña" placeholder="Ingresar contraseña" required>
                </div>
                </div>
            <input class="botonU" type="submit" value="Ingresar">
        </form>
    </div>

</body>
</html>
