<?php
session_start();

echo "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Huellitas</title>
    <link rel='stylesheet' href='estilos.css'>
</head>

<body>
    <nav>
        <span id='logo'>Huellitas.com</span>

        ";
        if(isset($_SESSION['usuario']))
        {
            echo "<ul id='menu'>
            <li><a href='index.php'>Inicio</a></li>
            <li><a href='PG02.php'>¿Quienes somos?</a></li>
            <li><a href='PG03.php'>Buscador</a></li>
            <li><a href='PG11.php'>Perfil</a></li>
            <li><a href='cerrarsesion.php'>Salir</a></li>
            </ul>";
        }
        else
        {
            echo "<ul id='menu'>
            <li><a href='index.php'>Inicio</a></li>
            <li><a href='PG02.php'>¿Quienes somos?</a></li>
            <li><a href='PG03.php'>Buscador</a></li>
            <li><a href='PG07.php'>Ingresar</a></li>
            <li><a href='PG05.php'>Registrate!</a></li>
            </ul>";
        }
        echo "

    </nav>
    <header>
        <span id='textcab'>Cuidame, y no me abandones...</span>
    </header>
    <section>
        <div class='sec'><br><br>
            <h1>Como no extraviar a tu mascota...</h1><br><br><br>
            <p>Siempre saque a su mascota con collar...</p>
            <p>No permita que jueguen solos...</p>
            <p>No los deje sin supervision...</p>
            <p>Pongales un collar con algun numero de contacto...</p>
        </div>
        <div class='sec'><br><br>
            <h1>Qué hacer si encuentras a una mascota perdida...</h1><br><br><br>
            <p>Registrala en nuestro sistema...</p>
            <p>Alimentala y dale un hogar provisional...</p>
            <p>Acegurate que no este enferma...</p>
            <p>Acegurate de que no tenga rabia...</p>
            <p>Revisa si tiene un numero en el collar...</p>
            <p>Verifica que tenga algun chip de identificacion</p>
        </div>
        <div class='sec'><br><br>
            <h1>En caso de perdida...</h1><br><br><br>
            <p>Registrala en nuestro sistema...</p>
            <p>pide ayuda a tus amigos y buscala en el lugar...</p>
            <p>Esperala por 24 horas y vuelve a ir donde se perdio...</p>
            <p>Pon carteles con tus datos y una foto...</p>
        </div>
    </section>
    <footer>
        <span id='copy'>&copy; 2020 Huellitas.com</span>
    </footer>
</body>

</html>";

?>