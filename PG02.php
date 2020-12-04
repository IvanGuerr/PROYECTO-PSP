<?php
session_start();

echo "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Quienes somos</title>
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
            <h1>Quienes somos...</h1><br><br><br>
            <p>Somos una organizacion sin animo de lucro</p>
            <p>que busca ayudar a las personas a encontrar</p>
            <p>sus mascotas extraviadas, ya sea que las</p>
            <p>pierdan, o que se encuentren alguna mascota</p>
            <p>ya que los animales nos importan, porque</p>
            <p>son los mejores amigos de las personas.</p>
            <p>Estos animalitos no se deben olvidar porque</p>
            <p>nos muestra su fidelidad</p>
        </div>
    </section>
    <footer>
        <span id='copy'>&copy; 2020 Huellitas.com</span>
    </footer>
</body>

</html>";

?>