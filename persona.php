<?php

class persona
{
    private $_documentoIdentidad;
    private $_fechaRegistroPersona;
    private $_nombre;
    private $_apellido;
    private $_celular;
    private $_correo;
    private $_usuario;
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

    public function Set_DocumentoIdentidad($documentoIdentidad_E)
    {
        $this->_documentoIdentidad = $documentoIdentidad_E;
    }

    public function Set_FechaRegistroPersona($fechaRegistroPersona_E)
    {
        $this->_fechaRegistroPersona = $fechaRegistroPersona_E;
    }

    public function Set_Nombre($nombre_E)
    {
        $this->_nombre = $nombre_E;
    }

    public function Set_Apellido($apellido_E)
    {
        $this->_apellido = $apellido_E;
    }

    public function Set_Celular($celular_E)
    {
        $this->_celular = $celular_E;
    }

    public function Set_Correo($correo_E)
    {
        $this->_correo = $correo_E;
    }

    public function Set_Usuario($usuario_E)
    {
        $this->_usuario = $usuario_E;
    }

    public function RegistrarPersona()
    {
        try
        {
            $sentencia = 'INSERT INTO persona (documentoidentidad, fechaRegistroPersona, nombre, apellido, celular, correo, usuario) VALUES (?,?,?,?,?,?,?)';
            $agregar = $this->conexion->prepare($sentencia);
            $agregar->execute(array($this->_documentoIdentidad, $this->_fechaRegistroPersona, $this->_nombre, $this->_apellido, $this->_celular, $this->_correo, $this->_usuario));
        }
        catch(PDOException $e)
        {
            echo "error";
        }
        return $this->mensaje;
    }

    public function ConsultarDocumento()
    {
        try
        {
            $sentencia = 'SELECT documentoidentidad FROM persona WHERE documentoidentidad =?';
            $agregar = $this->conexion->prepare($sentencia);
            $agregar->execute(array($this->_documentoIdentidad));
            $resultado = $agregar->fetchAll();
            if($resultado != null)
            {
                return "YES";
            }
            else 
            {
                return "NO";
            }
        }
        catch(PDOException $e)
        {
            echo "error";
        }
        return $this->mensaje;   
    }

    public function ValidarIdentidad()
    {
        try
        {
            $sentencia = 'SELECT usuario FROM persona WHERE documentoidentidad =? AND correo =?';//
            $agregar = $this->conexion->prepare($sentencia);
            $agregar->execute(array($this->_documentoIdentidad,$this->_correo));//
            $resultado = $agregar->fetchAll();
            //echo var_dump($resultado);
            if($resultado != null)
            {
                foreach($resultado as $result)
                {
                    if($result['usuario'] == $this->_usuario)//verificar
                    {
                        return $this->_usuario;
                    }
                }
            }
        }
        catch(PDOException $e)
        {
            echo "error";
        }
        return "";   
    }



}

?>