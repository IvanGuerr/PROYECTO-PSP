<?php

class controladorRecuperacionContrasena
{
    private $obj_login;
    private $obj_persona;

    private $_usuario;
    private $_contrasena;

    private $_documentoIdentidad;
    private $_correo;

    public function __construct()
    {
        require_once "login.php";
        require_once "persona.php";
        $this->obj_login = new login();
        $this->obj_persona = new persona();
    }

    public function CarturarDatosPersona( $correo_E, $usuario_E, $documentoIdentidad_E)
    {
        $this->_usuario = $usuario_E;
        $this->_documentoIdentidad = $documentoIdentidad_E;
        $this->_correo = $correo_E;
    }

    public function ConsultarPersona()
    {
        $this->obj_persona->Set_DocumentoIdentidad($this->_documentoIdentidad);
        $this->obj_persona->Set_Usuario($this->_usuario);
        $this->obj_persona->Set_Correo($this->_correo);
        $respuesta = $this->obj_persona->ValidarIdentidad();

        if($respuesta != "")
        {
            $this->obj_login->Set_usuario($respuesta);
            return $this->obj_login->ConsultarContrasena();
        }
        return "";
    }

    public function MostrarRespuesta($respuesta)
    {
        echo 
        "<!DOCTYPE html>
        <html lang='en'>
        <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Recuperar contraseña</title>
        <link rel='stylesheet' href='estilos.css'>
        <script src='validacion.js'></script>
        </head>
        <body>
        <nav>
        <span id='logo'>Huellitas.com</span>

        ";
            echo "<ul id='menu'>
            <li><a href='index.php'>Inicio</a></li>
            <li><a href='PG02.php'>¿Quienes somos?</a></li>
            <li><a href='PG03.php'>Buscador</a></li>
            <li><a href='PG07.php'>Ingresar</a></li>
            <li><a href='PG05.php'>Registrate!</a></li>
            </ul>";
 
        echo "

        </nav>
        <header>
        <span id='textcab'>Cuidame, y no me abandones...</span>
        </header>
        <section>";
        echo $respuesta;
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
    if(isset($_POST['correo']) && isset($_POST['usuario']) && isset($_POST['documento']))
    {
        $control = new controladorRecuperacionContrasena();
        $control->CarturarDatosPersona($_POST['correo'],$_POST['usuario'],$_POST['documento']);//pasar atributos a los paramentros
        $dato = $control->ConsultarPersona();

        if($dato != "" && $dato != "error")
        {
            $dato = "Su contraseña es: ".$dato; //contraseña
        }
        else
        {
            $dato = "Informacion Erronea. No se puede restablecer la contraseña.";
        }

        $control->MostrarRespuesta($dato);
    }
}

?>