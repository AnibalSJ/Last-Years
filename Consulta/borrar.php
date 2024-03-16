<?php
    include("conex.php");

    $N_doc = $_GET['N_doc'];
    $borrar = "DELETE FROM usuarios WHERE N_doc = '$N_doc' ";

    $consulta = mysqli_query($conect, $borrar);

    if($consulta){
        header("Location:consulta.php");
    }
?>