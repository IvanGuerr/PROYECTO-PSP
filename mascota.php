<?php

class mascota
{
    private $_idmascota;
    private $_fecha;
    private $_nombrem;
    private $_tipo;
    private $_raza;
    private $_genero;
    private $_color;
    private $_lugarp;
    private $_lugare;
    private $_descripcion;
    private $_estado;
    private $_documento;

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

    public function Set_Idmascota($idmascota_E)
    {
        $this->_idmascota = $idmascota_E;
    }
    public function Set_Fecha($fecha_E)
    {
        $this->_fecha = $fecha_E;
    }
    public function Set_Nombrem($nombrem_E)
    {
        $this->_nombrem = $nombrem_E;
    }
    public function Set_Tipo($tipo_E)
    {
        $this->_tipo = $tipo_E;
    }
    public function Set_Raza($raza_E)
    {
        $this->_raza = $raza_E;
    }
    public function Set_Genero($genero_E)
    {
        $this->_genero = $genero_E;
    }
    public function Set_Color($color_E)
    {
        $this->_color = $color_E;
    }
    public function Set_Lugarp($lugarp_E)
    {
        $this->_lugarp = $lugarp_E;
    }
    public function Set_Lugare($lugare_E)
    {
        $this->_lugare = $lugare_E;
    }
    public function Set_Descripcion($descripcion_E)
    {
        $this->_descripcion = $descripcion_E;
    }
    public function Set_Estado($estado_E)
    {
        $this->_estado = $estado_E;
    }
    public function Set_Documento($documento_E)
    {
        $this->_documento = $documento_E;
    }

    public function RegistrarMascota()
    {
        try
        {
            $sentencia = 'INSERT INTO mascota (idmascota, fecha, nombrem, tipo, raza, genero, color, lugarp, lugare, descripcion, estado, documentoidentidad) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
            $agregar = $this->conexion->prepare($sentencia);
            $agregar->execute(array($this->_idmascota, $this->_fecha, $this->_nombrem, $this->_tipo, $this->_raza, $this->_genero, $this->_color, $this->_lugarp, $this->_lugare, $this->_descripcion, $this->_estado,$this->_documento));
        }
        catch(PDOException $e)
        {
            echo "error";
        }
        return $this->mensaje;
    }

}

?>