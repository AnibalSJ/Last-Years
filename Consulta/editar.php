<?php

include("conex.php");
$N_doc = $_GET['N_doc'];

$editar = "SELECT * FROM usuarios WHERE N_doc = '$N_doc'";
$consulta = mysqli_query($conect, $editar);

$row = mysqli_fetch_array($consulta);
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="diseño.css">
    <link rel="shortcut icon" href="../img/L1.png">
    <title>Editar datos</title>
</head>
<body>
    <form action="actualizar.php" method="post" class="fil filter tabla">
        <h3>Edite sus datos</h3>
        <input type="hidden" name="N_doc"  value="<?php echo $row['N_doc']?>" >
        <input type="text" name="nombre" class="prueba" value="<?php echo $row['nombre']?>">
        <input type="text" name="apellido" class="prueba" value="<?php echo $row['apellido']?>">
        <input type="email" name="correo" class="prueba" value="<?php echo $row['correo']?>">
        <input type="varchar" name="usuario" class="prueba" value="<?php echo $row['usuario']?>">
        <input type="submit" class="boton fil filter" value="Actualizar">
    </form>
</body>
</html>