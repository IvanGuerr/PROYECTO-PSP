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
}

?>