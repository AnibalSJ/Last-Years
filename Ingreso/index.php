<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="shortcut icon" href="image/L1.png">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".content").fadeOut(2000);
            },5000);
        });
    </script>
    <title>Inicio de Sesión</title>
</head>
<body>
    <!-- Formulario -->
    <div class="container">
        <form action="validar.php" method="post" class="fil filter">
            <h1>Ingresar Sesión</h1>
            <div class="p">
            <p>Usuario
            </div>
                <input type="text" placeholder="Ingrese su usuario o correo" name="usuario">
            </p>
            <div class="c">
            <p>Contraseña
            </div>
                <input type="password" placeholder="Ingrese su contraseña" name="contraseña">
            </p>
            <input type="submit" value="Ingresar" name="ingresar">
            <p class="crear">Si aún no tiene cuenta, presione Registro para crear su nueva cuenta</p>
        </form>
</div>

<nav class="navegation">
            <ul>
                <li class="bottom"><a href="../index.php">INICIO</a></li>
                <li class="bot"><a href="../Registro/inicio.php">REGISTRO</a></li>
            </ul> 
    </nav>

</body>
</html>