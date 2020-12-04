<?php
session_start();

if(isset($_SESSION['usuario']))
{

}
else
{
    header("Location: PG07.php");
}

class controladorActualizarMascota
{
    private $obj_mascota;
    private $respuesta;

    public function __construct()
    {
        require_once "mascota.php";
        $this->obj_mascota = new mascota();
    }

    public function PonerDatos($documento_E, $idmascota_E, $nombrem_E, $tipo_E, $raza_E, $genero_E, $color_E, $lugarp_E, $lugare_E, $descripcion_E, $estado_E)
    {
        $this->respuesta = $this->obj_mascota->ActualizarDatosMascota($documento_E, $idmascota_E, $nombrem_E, $tipo_E, $raza_E, $genero_E, $color_E, $lugarp_E, $lugare_E, $descripcion_E, $estado_E);//pendiente por retornar
    }
  
    public function MostrarResultado()
    {
        echo 
        "<!DOCTYPE html>
        <html lang='en'>
        <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Actualizar Mascotas</title>
        <link rel='stylesheet' href='estilos.css'>
        <script src='validacion.js'></script>
        </head>
        <body>
        <nav>
        <span id='logo'>Huellitas.com</span>
        <ul id='menu'>
            <li><a href='index.php'>Inicio</a></li>
            <li><a href='PG02.php'>¿Quienes somos?</a></li>
            <li><a href='PG03.php'>Buscador</a></li>
            <li><a href='PG11.php'>Perfil</a></li>
            <li><a href='index.php'>Salir</a></li>
        </ul>
        </nav>
        <header>
        <span id='textcab'>Cuidame, y no me abandones...</span>
        </header>
        <section>";
      
        //Respuesta
        echo
        "<div id='conform'>
        ".$this->respuesta."
        </div>";

        echo 
        "</section>
        <footer>
        <span id='copy'>&copy; 2020 Huellitas.com</span>
        </footer>
        </body>
        </html>";
    }
}

if($_POST)
{
    if(isset($_POST['documento']) && isset($_POST['idmascota']) && isset($_POST['nombrem']) && isset($_POST['tipo']) && isset($_POST['raza']) && isset($_POST['genero']) && isset($_POST['color'])&& isset($_POST['lugarp'])&& isset($_POST['lugare'])&& isset($_POST['descripcion'])&& isset($_POST['estado'])) 
    {  
        $control = new controladorActualizarMascota();
        $control->PonerDatos($_POST['documento'],$_POST['idmascota'],$_POST['nombrem'],$_POST['tipo'],$_POST['raza'],$_POST['genero'],$_POST['color'],$_POST['lugarp'],$_POST['lugare'],$_POST['descripcion'],$_POST['estado']);
        $control->MostrarResultado();
    }
}

?>