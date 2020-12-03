<?php

class controladorActualizarDatosPersonales
{
    private $obj_login;
    private $obj_persona;

    public function __construct()
    {
        require_once "login.php";
        require_once "persona.php";
        $this->obj_login = new login();
        $this->obj_persona = new persona();
    }

    public function CargarDatos($user)
    {
        $this->obj_persona->CargarDatosPersona($user);//pendiente
        $this->obj_login->CargarDatosLogin($user);//pendiente
    }
    
    public function MostrarPaginaActualizarPersona()
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
            <li><a href='PG11.html'>Perfil</a></li>
            <li><a href='index.html'>Salir</a></li>
        </ul>
        </nav>
        <header>
        <span id='textcab'>Cuidame, y no me abandones...</span>
        </header>
        <section>";
      
        //formulario
        echo
        "<div id='conform'>
            <form method='POST' action='controladoractualizarpersona.php' onsubmit='return validar();'>
                <fieldset>
                    <legend>Actualizar datos personales</legend>
                    <label>Nombre: </label><input type='text' id='nombre' name='nombre' value='".$this->obj_persona->Get_Nombre()."'><br>
                    <label>Apellido: </label><input type='text' id='apellido' name='apellido' value='".$this->obj_persona->Get_Apellido()."'><br>
                    <label>Celular: </label><input type='number' id='celular' name='celular' value='".$this->obj_persona->Get_Celular()."'><br>
                    <label>Correo: </label><input type='email' id='correo' name='correo' value='".$this->obj_persona->Get_Correo()."'><br>
                    <label>Usuario: </label><input type='text' id='usuario' name='usuario' value='".$this->obj_login->Get_usuario()."' readonly><br>
                    <label>Contraseña: </label><input type='password' id='contrasena' name='contrasena' value='".$this->obj_login->Get_contrasena()."'><br>
                    <input value='Actualizar' type='submit'>
                </fieldset>
            </form>
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

$control = new controladorActualizarDatosPersonales();
$control->CargarDatos("claudis123");
$control->MostrarPaginaActualizarPersona();

?>