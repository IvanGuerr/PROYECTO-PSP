<?php

class login
{
    private $_usuario;
    private $_contrasena;
    private $conexion;
    private $mensaje;

    public function __construct()
    {
        $this->mensaje = "Sin problemas";
        $this->conectarbd();
    }

    private function conectarbd()
    {
        //conexcion bd
        include "conexion.php";
        $link = 'mysql:host='.$host.';dbname='.$database;

        try
        {
            $this->conexion = new PDO($link,$user,$passwortd);
        }
        catch(PDOException $e)
        {
            $this->mensaje = "¡Error! ".$e->getMessage();
        }
    }

    public function Set_usuario($usuario_E)
    {
        $this->_usuario = $usuario_E;
    }

    public function Set_contrasena($contrasena_E)
    {
        $this->_contrasena = $contrasena_E;
    }


    public function RegistrarUsuario()
    {
        try
        {
            $sentencia = 'INSERT INTO login (usuario, contrasena) VALUES (?,?)';
            $agregar = $this->conexion->prepare($sentencia);
            $agregar->execute(array($this->_usuario,$this->_contrasena));
        }
        catch(PDOException $e)
        {
            echo "error";
        }
        return $this->mensaje;
    }


    public function ConsultarContrasena()
    {
        try
        {
            $sentencia = 'SELECT contrasena FROM login WHERE usuario =?';
            $agregar = $this->conexion->prepare($sentencia);
            $agregar->execute(array($this->_usuario));
            $resultado = $agregar->fetchAll();
            if($resultado != null)
            {
                foreach($resultado as $result)
                {

                    return $result['contrasena'];
                }
            }
        }
        catch(PDOException $e)
        {
            echo "error";
        }
        return "";   
    }

    public function CargarDatosLogin($user_E)
    {
        $this->_usuario = $user_E;
        $this->_contrasena = $this->ConsultarContrasena();
    }

    public function Get_contrasena()
    {
        return $this->_contrasena;
    }

    public function Get_usuario()
    {
        return $this->_usuario;
    }

    public function ActualizarDatosLogin($usuario_E,$contrasena_E)
    {
        try
        {
            $sentencia = 'SELECT usuario FROM login WHERE usuario =?';
            $agregar = $this->conexion->prepare($sentencia);
            $agregar->execute(array($usuario_E));
            $resultado = $agregar->fetchAll();
            if($resultado != null)
            {
                $sentencia = 'UPDATE login SET contrasena =? WHERE usuario=?';
                $agregar = $this->conexion->prepare($sentencia);
                $agregar->execute(array($contrasena_E,$usuario_E));
            }
        }
        catch(PDOException $e)
        {
            return "error";
        }
        return "YES";   
    }

    public function ValidarUsuarioContrasena($usuario_E,$contrasena_E)
    {
        try
        {
            $sentencia = 'SELECT usuario, contrasena FROM login WHERE usuario =?';
            $agregar = $this->conexion->prepare($sentencia);
            $agregar->execute(array($usuario_E));
            $resultado = $agregar->fetchAll();
            if($resultado != null)
            {
                foreach($resultado as $result)
                {
                    if($result['usuario'] == $usuario_E && $result['contrasena'] == $contrasena_E)
                    {
                        return "ACEPTADO";
                    }
                    else
                    {
                        return "CONTRASEÑA INVALIDA";
                    }
                }
            }
            else
            {
                //no existe el usuario registrado
                return "USUARIO NO REGISTRADO";
            }
        }
        catch(PDOException $e)
        {
            return "ERROR";
        }
    }
}

?>