<?php
session_start();

if(isset($_SESSION['usuario']))
{

}
else
{
    header("Location: PG07.php");
}

class controladorActualizarPersona
{
    private $obj_login;
    private $obj_persona;
    private $respuesta;

    public function __construct()
    {
        require_once "login.php";
        require_once "persona.php";
        $this->obj_login = new login();
        $this->obj_persona = new persona();
    }

    public function PonerDatos($nombre_E, $apellido_E, $celular_E, $correo_E, $usuario_E, $contrasena_E)
    {
        $resp_A = $this->obj_persona->ActualizarDatosPersona($usuario_E,$nombre_E, $apellido_E, $celular_E, $correo_E);//pendiente por retornar
        $resp_B = $this->obj_login->ActualizarDatosLogin($usuario_E,$contrasena_E);//pendiente por retornar

        if($resp_A == "YES" && $resp_B == "YES")
        {
            $this->respuesta = "Datos Actualizados Correctamente.";
        }
        else
        {
            $this->respuesta = "Error al actualizar datos.";
        }
    }
  
    public function MostrarResultado()
    {
        echo 
        "<!DOCTYPE html>
        <html lang='en'>
        <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Actualizar Datos</title>
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
            <li><a href='cerrarsesion.php'>Salir</a></li>
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
    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['celular']) && isset($_POST['correo']) && isset($_POST['usuario']) && isset($_POST['contrasena'])) 
    {  
        $control = new controladorActualizarPersona();
        $control->PonerDatos($_POST['nombre'],$_POST['apellido'],$_POST['celular'],$_POST['correo'],$_POST['usuario'],$_POST['contrasena']);
        $control->MostrarResultado();
    }
}

?>