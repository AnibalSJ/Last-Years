<?php

include("conex.php");
$N_doc = $_GET['N_doc'];
$usuarios = "SELECT * FROM usuarios";
$consulta = mysqli_query($conect, $usuarios);

$row = mysqli_fetch_array($consulta);
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../img/L1.png">
    <title>Consultar datos</title>
</head>
<body>
    <div class="tabla">
        <div class="fil filter">
            <table class="separar">
                <thead>
                    <tr>
                        <th>Número de identidad</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Usuario</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while($row = mysqli_fetch_array($consulta)){
                    ?>

                    <tr>
                        <th><?php echo $row['N_doc']?></th>
                        <th><?php echo $row['nombre']?></th>
                        <th><?php echo $row['apellido']?></th>
                        <th><?php echo $row['correo']?></th>
                        <th><?php echo $row['usuario']?></th>
                        <th><a href="editar.php?N_doc=<?php echo $row['N_doc'] ?>" class="boton">Editar</a></th>
                        <th><a href="borrar.php?N_doc=<?php echo $row['N_doc'] ?>" class="boton">Borrar</a></th>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <a href="../Registro/inicio.php"><button class="fil filter mover">Registro</button></a>
        </div>
    </div>
</body>
</html>