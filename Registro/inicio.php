
<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href="style.css">   
    <link rel="shortcut icon" href="images/L1.png">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".content").fadeOut(1000);
            },2000);
        
            setTimeout(function() {
                $(".content2").fadeIn(1000);
            },4000);
        });
    </script>
</head>
<body>
    <div class="container">
            <form method="post"  class="fil filter">
            <h1 class="header">Registro</h1>
            <input type="text" name="nombre" placeholder="Nombres">
            <input type="text" name="apellido" placeholder="Apellidos">
            <input type="number" name="N_doc" placeholder="Número de identificación">
            <input type="email" name="correo" placeholder="Correo">
            <input type="text" name="usuario" placeholder="Nombre de usuario">
            <input type="password" name="contraseña" placeholder="Contraseña">
            <input type="submit" value="Registrar" name="registro"> 
            <p>Si ya tiene cuenta, presione en INGRESAR</p>
            </form>
    </div>


    <nav class="navegation">
            <ul>
                <li class="bottom"><a href="../index.php">INICIO</a></li>
                <li class="bot"><a href="../Ingreso/index.php">INGRESAR</a></li>
            </ul> 
    </nav>

<?php

include("ing.php");

?>


</body>
</html>

