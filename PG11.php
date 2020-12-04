<?php
session_start();

if(isset($_SESSION['usuario']))
{

}
else
{
    header("Location: PG07.html");
}

echo "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Ingreso al sistema</title>
    <link rel='stylesheet' href='estilos.css'>
</head>

<body>
    <nav>
        <span id='logo'>Huellitas.com</span>
        <ul id='menu'>
            <li><a href='index.php'>Inicio</a></li>
            <li><a href='PG02.php'>¿Quienes somos?</a></li>
            <li><a href='PG03.php'>Buscador</a></li>
            <li><a href='PG11.php'>Perfil</a></li>
            <li><a href='cerrarsesion.php'>Salir</a></li>
        </ul>
    </nav>
    <header>
        <span id='textcab'>Cuidame, y no me abandones...</span>
    </header>
    <section>
        <div id='conform'>
            <h2>Binenvenido ".$_SESSION['usuario']."</h2>
            <span><a href='PG12.php'>Registrar mascota</a></span><br>
            <span><a href='controladoractualizardatosmascota.php'>Actualizar datos de mascota</a></span><br>
            <span><a href='controladoractualizardatospersonales.php'>Actualizar datos personales</a></span><br>
        </div>
    </section>
    <footer>
        <span id='copy'>&copy; 2020 Huellitas.com</span>
    </footer>
</body>

</html>";

?>