
<?php

include("conex.php");

$contraseña = $_POST['contraseña'];
//y ahora cifro la clave usando un hash
$pass_cifrada = password_hash($contraseña, PASSWORD_DEFAULT, array("cost"=>10));

if (isset($_POST['registro'])){

    if(strlen($_POST['usuario']) >=1 && strlen($_POST['contraseña']) >=1 && strlen($_POST['nombre']) >=1 && strlen($_POST['apellido']) >=1 && strlen($_POST['N_doc']) >=1 && strlen($_POST['correo']) >=1) {

    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $N_doc = trim($_POST['N_doc']);
    $correo = trim($_POST['correo']);
    $usuario = trim($_POST['usuario']);
    $contraseña = trim($pass_cifrada);
    $consulta = "INSERT INTO usuarios (usuario, contraseña, nombre, apellido, N_doc, correo) VALUES ('$usuario', '$contraseña', '$nombre', '$apellido', '$N_doc', '$correo')";

    $resultado= mysqli_query($conect,$consulta);

        if ($resultado) {  
            ?>

<h3 class ="ok content">¡Usuario ingresado correctamente!</h3>  

<?php
}else{
?>

<h3 class ="bad">¡No a sido posible ingresar el usuario!</h3>

<?php
}
}else {
?>
<h3 class ="bad">¡Por favor diligencie todos los campos!</h3>
<?php
}
}
?>