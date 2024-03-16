<?php

    include("db.php");

    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    session_start();
    $_SESSION['usuario']=$usuario;

    



    $consulta=mysqli_query($conexion, "SELECT * FROM usuarios where usuario= '$usuario'");
    $resultado= mysqli_fetch_array($consulta);

    if(isset($_POST['ingresar'])){

        $filas=mysqli_num_rows($consulta);

        if(($filas == 1 && password_verify($contraseña, $resultado['contraseña']))){

            header("location:home.php");
        }   
        else{
        ?>
        <?php
        include("index.php");
        ?>
        <h1 class="bad content">Ingrese correctamente el usuario o la contraseña</h1>
        <?php
    }
}else{
    echo "No";
}



