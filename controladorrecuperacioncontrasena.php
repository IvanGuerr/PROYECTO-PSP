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
            echo $this->obj_login->ConsultarContrasena();
        }
    }
}

if($_POST)
{
    if(isset($_POST['correo']) && isset($_POST['usuario']) && isset($_POST['documento']))
    {
        $control = new controladorRecuperacionContrasena();
        $control->CarturarDatosPersona($_POST['correo'],$_POST['usuario'],$_POST['documento']);//pasar atributos a los paramentros
        $control->ConsultarPersona();
    }
}

?>