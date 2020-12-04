<?php

class controladorRegistroPersona
{
    private $obj_login;
    private $obj_persona;

    private $_usuario;
    private $_contrasena;

    private $_documentoIdentidad;
    private $_fechaRegistroPersona;
    private $_nombre;
    private $_apellido;
    private $_celular;
    private $_correo;

    public function __construct()
    {
        require_once "login.php";
        require_once "persona.php";
        $this->obj_login = new login();
        $this->obj_persona = new persona();
    }

    public function CarturarDatosPersona($documentoIdentidad_E, $fechaRegistroPersona_E, $nombre_E, $apellido_E, $celular_E, $correo_E, $usuario_E, $contrasena_E)
    {
        $this->_usuario = $usuario_E;
        $this->_contrasena = $contrasena_E;
        $this->_documentoIdentidad = $documentoIdentidad_E;
        $this->_fechaRegistroPersona = $fechaRegistroPersona_E;
        $this->_nombre = $nombre_E;
        $this->_apellido = $apellido_E;
        $this->_celular = $celular_E;
        $this->_correo = $correo_E;
    }

    public function AlmacenarDatosUsuario()
    {
        $this->obj_login->Set_usuario($this->_usuario);
        $this->obj_login->Set_contrasena($this->_contrasena);
        echo $this->obj_login->RegistrarUsuario();
    }

    public function AlmacenarDatosPersona()
    {
        $this->obj_persona->Set_DocumentoIdentidad($this->_documentoIdentidad);
        $this->obj_persona->Set_FechaRegistroPersona($this->_fechaRegistroPersona);
        $this->obj_persona->Set_Nombre($this->_nombre);
        $this->obj_persona->Set_Apellido($this->_apellido);
        $this->obj_persona->Set_Celular($this->_celular);
        $this->obj_persona->Set_Correo($this->_correo);
        $this->obj_persona->Set_Usuario($this->_usuario);
        return $this->obj_persona->RegistrarPersona();
    }

    public function MostrarRespuesta($respuesta)
    {
        echo 
        "<!DOCTYPE html>
        <html lang='en'>
        <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Registro personas</title>
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
    if(isset($_POST['documento']) && isset($_POST['fecha']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['celular']) && isset($_POST['correo']) && isset($_POST['usuario']) && isset($_POST['contrasena']))
    {
        $control = new controladorRegistroPersona();
        $control->CarturarDatosPersona($_POST['documento'],$_POST['fecha'],$_POST['nombre'],$_POST['apellido'],$_POST['celular'],$_POST['correo'],$_POST['usuario'],$_POST['contrasena']);//pasar atributos a los paramentros
        $control->AlmacenarDatosUsuario();
        $dato = $control->AlmacenarDatosPersona();

        if($dato == "Sin problemas")
        {
             $control->MostrarRespuesta("Registro Exitoso");
        }
        else
        {
             $control->MostrarRespuesta("Error en el registro");
        }

    }
}
//header("Location: PG05.php");

?>