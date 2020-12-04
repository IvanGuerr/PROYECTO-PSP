<?php
session_start();

echo "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Buscador de Mascotas</title>
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
            <li><a href='index.php'>Salir</a></li>
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
            <form method='POST' action='controladorconsultamascotas.php' onsubmit='return validar();'>
                <fieldset>
                    <legend>Buscador</legend>
                    <!--<label>Nombre de mascota: </label><input type='text' id='nombrem' name='nombrem'><br>
                    <label>Tipo: </label>
                    <select name='tipo'>
                    <optgroup label='Tipo:'>
                        <option id='tipo'>Canino</option>
                        <option id='tipo'>Felino</option>
                    </optgroup>
                </select><br>
                    <label>Raza: </label><input type='text' id='raza' name='raza'><br>
                    <label>Genero: </label>
                    <select name='genero'>
                    <optgroup label='Genero:'>
                        <option id='genero'>Hembra</option>
                        <option id='genero'>Macho</option>
                    </optgroup>
                </select><br>
                    <label>Color: </label><input type='text' id='color' name='color'><br>
                    <label>Lugar de donde se perdió: </label><br>
                    <textarea cols='40' rows='5' maxlength='100' id='lugarp' name='lugarp'></textarea><br>
                    <label>Lugar donde fue encontrado: </label><br>
                    <textarea cols='40' rows='5' maxlength='100' id='lugare' name='lugare'></textarea><br>
                    <label>Descripción: </label><br>
                    <textarea cols='40' rows='5' maxlength='100' id='descripcion' name='descripcion'></textarea><br>
                    <label>Estado: </label>
                    <select name='estado'>
                    <optgroup label='Estado:'>
                        <option id='estado'>Perdido</option>
                        <option id='estado'>Encontrado</option>
                        <option id='estado'>Entregado</option>
                    </optgroup>
                </select><br>-->
                    <input value='Buscar' type='submit'>
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