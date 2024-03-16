<?php

    session_start();
    if(($_SESSION['usuario']) !=''){
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="image/L1.png">
    
    <title>De Regreso a Casa</title>
</head>
<body> 
<audio autoplay loop id="myaudio">
    <source src="Audio/Swinging A1.wav">
</audio>
<script>
    var audio = document.getElementById("myaudio");
    audio.volume = 0.5;
</script>
<main class="main">
    <div class="fil card">
        <div class="contener ">
            <div id="0">
                <h1 class="titulo">
                    De Regreso a Casa
                </h1>
        </div>
    <center>
    <a href="cerrar.php"><img src="image/Cerrar.png" alt="Cerrar Sesión" ></a>
    </center>

    
    <p>Un joven llamado Deinsuru decide ir a visitar a sus abuelos a su granja, él hace dicho viaje ya que sus abuelos desde hace mucho tiempo no tienen citas como una pareja, así que va a cuidarla para que sus abuelos puedan salir.</p>

    <p>En el camino se encuentra con una mujer que está llorando, él se habla con ella un rato y después sigue su camino, pero mientras hablaba con ella no se percató de unos seres muy extraños que lo estaban expiando. Al llegar a la granja habla con su abuela para posteriormente ir donde se encuentra su abuelo.</p>

    <p>Al irse sus abuelos Deinsuru verifica que todo en la granja esté bien, con esto paso el tiempo hasta que se le hizo de noche, tiempo después de irse a dormir, bajo la fuerte lluvía que estaba pasando en ese momento, los animales de la granja se alteran y hace mucho ruido</p> 

    <p>Cuando él sale a ver que pasaba, vuelve a escuchar los sonidos que hacen los animales de la granja, así que va hacia donde ellos se encuentran y una nave lo abdujó tiempo después. La nave espacial que lo abdujó llega a una más grande, aquí llevan a Deinsuru ante el jefe de dicha nave y este le dice a él que tiene que pasar una serie de pruebas y lo dejarán libre.</p> 

    <br>
    <br>
    
    <hr class="bookends-dots">
    <p class="frase">¿SERÁS CAPAS DE VOLVER A LA TIERRA CON TUS CONOCIMIENTOS?</p> 
    <hr class="bookends-dots">

    <br>
    <br>
        <div class="slider">
            <ul>
                <li><img src="image/1.jpg" alt=""></li>
                <li><img src="image/2.jpg" alt=""></li>
                <li><img src="image/4.jpg" alt=""></li>
                <li><img src="image/5.jpg" alt=""></li>
                            
            </ul>
        </div>
        <br>
        <br>
        <br>
</div>

<nav class="navegation">
            <ul>
                <li class="inicio"><a href="../index.php"><img src="image/Inicio.png" alt="Inicio" ></a></li>
            </ul> 
</nav>

<hr class="linea">
    <ul> 
        <li class="juego"><a href="http://localhost/Página/ingreso/Mapa/www/">De Regreso a casa</a></li>
    </ul> 
<hr class="linea">
</main>

</body>
</html>

<?php
}else{
    header("Location: index.php");
}
?>