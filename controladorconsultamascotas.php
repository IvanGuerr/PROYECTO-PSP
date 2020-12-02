<?php

class controladorConsultaMascotas
{
    public function __construct()
    {
        require_once "mascota.php";
        $this->obj_mascota = new mascota();
    }

    public function ConsultarMascotasTodos()
    {
        $tabla = $this->obj_mascota->ConsultarMascotas();
        $this->MostrarTabla($tabla);
    }

    public function MostrarTabla($tabla_E)
    {
        echo 
        "<!DOCTYPE html>
        <html lang='en'>
        <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Buscador</title>
        <link rel='stylesheet' href='estilos.css'>
        <script src='validacion.js'></script>
        </head>
        <body>
        <nav>
        <span id='logo'>Huellitas.com</span>
        <ul id='menu'>
            <li><a href='index.html'>Inicio</a></li>
            <li><a href='PG02.html'>¿Quienes somos?</a></li>
            <li><a href='PG03.html'>Buscador</a></li>
            <li><a href='PG07.html'>Ingresar</a></li>
            <li><a href='PG05.html'>Registrate!</a></li>
        </ul>
        </nav>
        <header>
        <span id='textcab'>Cuidame, y no me abandones...</span>
        </header>
        <section>";
        echo $tabla_E;
        echo 
        "</section>
        <footer>
        <span id='copy'>&copy; 2020 Huellitas.com</span>
        </footer>
        </body>
        </html>";
    }

}

/*if($_POST)
{
    if(isset($_POST['nombrem']) && isset($_POST['tipo']) && isset($_POST['raza']) && isset($_POST['genero']) && isset($_POST['color']) && isset($_POST['lugarp']) && isset($_POST['lugare']) && isset($_POST['descripcion']) && isset($_POST['estado']))
    {
        $control = new controladorConsultaMascotas();
    }
}*/

$control = new controladorConsultaMascotas();
$control->ConsultarMascotasTodos();

?>