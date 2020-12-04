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
            return "error";
        }
        return $this->mensaje;
    }

    public function ConsultarMascotas()
    {
        $tabla = "";
        try
        {
            $sentencia = 'SELECT * FROM mascota, persona WHERE mascota.documentoidentidad = persona.documentoidentidad ORDER BY idmascota';//
            $agregar = $this->conexion->prepare($sentencia);
            $agregar->execute();//
            $resultado = $agregar->fetchAll();
            //echo var_dump($resultado);
            if($resultado != null)
            {
                $tabla = "<table><tr><th>Id</th><th>Fecha</th><th>Nombre Mascota</th><th>Tipo</th><th>Raza</th><th>Genero</th><th>Color</th><th>Lugar Perdida</th><th>Lugar Encontrada</th><th>Descripcion</th><th>Estado</th><th>Nombre</th><th>Apellido</th><th>Celular</th><th>Correo</th></tr>";

                foreach($resultado as $result)
                {
                    $tabla = $tabla.
                    "<tr>".
                    "<td>".$result["idmascota"]."</td>".
                    "<td>".$result["fecha"]."</td>".
                    "<td>".$result["nombrem"]."</td>".
                    "<td>".$result["tipo"]."</td>".
                    "<td>".$result["raza"]."</td>".
                    "<td>".$result["genero"]."</td>".
                    "<td>".$result["color"]."</td>".
                    "<td>".$result["lugarp"]."</td>".
                    "<td>".$result["lugare"]."</td>".
                    "<td>".$result["descripcion"]."</td>".
                    "<td>".$result["estado"]."</td>".
                    "<td>".$result["nombre"]."</td>".
                    "<td>".$result["apellido"]."</td>".
                    "<td>".$result["celular"]."</td>".
                    "<td>".$result["correo"]."</td>".
                    "</tr>";
                }
                $tabla = $tabla."</table>";
            }
        }
        catch(PDOException $e)
        {
            echo "error";
        }
        return $tabla;   
    }

    public function ConsultarMascotasDocumento($doc_E)
    {
        $tabla = "";

        try
        {
            $sentencia = 'SELECT * FROM mascota WHERE documentoidentidad = ?';//
            $agregar = $this->conexion->prepare($sentencia);
            $agregar->execute(array($doc_E));//
            $resultado = $agregar->fetchAll();
            //echo var_dump($resultado);
            if($resultado != null)
            {
                $tabla = "<table><tr><th>Id</th><th>Fecha</th><th>Nombre Mascota</th><th>Tipo</th><th>Raza</th><th>Genero</th><th>Color</th><th>Lugar Perdida</th><th>Lugar Encontrada</th><th>Descripcion</th><th>Estado</th></tr>";

                foreach($resultado as $result)
                {
                    $tabla = $tabla.
                    "<tr>".
                    "<td>".$result["idmascota"]."</td>".
                    "<td>".$result["fecha"]."</td>".
                    "<td>".$result["nombrem"]."</td>".
                    "<td>".$result["tipo"]."</td>".
                    "<td>".$result["raza"]."</td>".
                    "<td>".$result["genero"]."</td>".
                    "<td>".$result["color"]."</td>".
                    "<td>".$result["lugarp"]."</td>".
                    "<td>".$result["lugare"]."</td>".
                    "<td>".$result["descripcion"]."</td>".
                    "<td>".$result["estado"]."</td>".
                    "</tr>";
                }
                $tabla = $tabla."</table>";
            }
        }
        catch(PDOException $e)
        {
            echo "error";
        }
        return $tabla;   
    }

    public function ActualizarDatosMascota($documento_E, $idmascota_E, $nombrem_E, $tipo_E, $raza_E, $genero_E, $color_E, $lugarp_E, $lugare_E, $descripcion_E, $estado_E)
    {
        try
        {
            $sentencia = 'SELECT idmascota FROM mascota WHERE documentoidentidad =? AND idmascota =?';
            $agregar = $this->conexion->prepare($sentencia);
            $agregar->execute(array($documento_E,$idmascota_E));
            $resultado = $agregar->fetchAll();
            if($resultado != null)
            {
                $dato ="";
               
                $sentencia = 'UPDATE mascota SET nombrem =?, tipo =?, raza =?, genero =?, color =?, lugarp =?, lugare =?, descripcion =?, estado =? WHERE idmascota=?';
                $agregar = $this->conexion->prepare($sentencia);
                $agregar->execute(array($nombrem_E, $tipo_E, $raza_E, $genero_E, $color_E, $lugarp_E, $lugare_E, $descripcion_E, $estado_E, $idmascota_E));
                return "Actualizacion satisfactoria";
            }
        }
        catch(PDOException $e)
        {
            return "error";
        }
        return "Error al actualizar";   
    }

}

?>