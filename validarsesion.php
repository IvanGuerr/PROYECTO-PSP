<?php
session_start();

class validarSesion
{
    private $obj_login;
    private $respuesta;

    public function __construct()
    {
        require_once "login.php";
        $this->obj_login = new login();
    }
    public function ValidarIngreso($usuario_E, $contrasena_E)
    {
        $this->respuesta =$this->obj_login->ValidarUsuarioContrasena($usuario_E, $contrasena_E);
        return $this->respuesta;
    }
}

if($_POST)
{
    if(isset($_POST['usuario']) && isset($_POST['contrasena']))
    {
        $control = new validarSesion();
        $resp = $control->ValidarIngreso($_POST['usuario'],$_POST['contrasena']);

        if($resp == "ACEPTADO")
        {
            //crear variable de sesion
            $_SESSION['usuario'] = $_POST['usuario'];
            //redireccionar a perfil correspondiente
            header("Location: PG11.php");//modificar la pagina a php
        }
        else
        {
            //redireccionar a pagina PG07
            header("Location: PG07.php");
        }
    }
}
?>