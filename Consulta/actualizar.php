<?php

include("conex.php");

$N_doc = $_POST['N_doc'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];

$actualizar = "UPDATE usuarios SET usuario='$usuario',nombre='$nombre',apellido='$apellido',N_doc='$N_doc',correo='$correo' WHERE N_doc = '$N_doc'";
$consulta = mysqli_query($conect, $actualizar);

if($consulta){
    header("location:consulta.php");
}
?>