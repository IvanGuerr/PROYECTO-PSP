<?php
session_start();

echo "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Registrate</title>
    <link rel='stylesheet' href='estilos.css'>
    <script src='validacion.js'></script>
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
        <div id='conform'>
            <form method='POST' action='controladorRegistroPersona.php' onsubmit='return validar();'>
                <fieldset>
                    <legend>Regístrate!</legend>
                    <label>Documento de identidad: </label><input type='number' id='documento' name='documento'><br>
                    <label>Fecha de registro: </label><input type='date' id='fecha' name='fecha'><br>
                    <label>Nombre: </label><input type='text' id='nombre' name='nombre'><br>
                    <label>Apellido: </label><input type='text' id='apellido' name='apellido'><br>
                    <label>Celular: </label><input type='number' id='celular' name='celular'><br>
                    <label>Correo: </label><input type='email' id='correo' name='correo'><br>
                    <label>Usuario: </label><input type='text' id='usuario' name='usuario'><br>
                    <label>Contraseña: </label><input type='password' id='contrasena' name='contrasena'><br>
                    <input value='Registrarse' type='submit'>
                </fieldset>
            </form>
        </div>
    </section>
    <footer>
        <span id='copy'>&copy; 2020 Huellitas.com</span>
    </footer>
</body>

</html>";

?>