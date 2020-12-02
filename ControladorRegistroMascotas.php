<?php

class controladorRegistroMascotas
{
    private $_idmascota;
    private $_documento;
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

    private $obj_persona;
    private $obj_mascota;

    public function __construct()
    {
        require_once "persona.php";
        require_once "mascota.php";
        $this->obj_persona = new persona();
        $this->obj_mascota = new mascota();
    }

    public function CapturarDatosPost($idmascota_E, $documento_E, $fecha_E, $nombrem_E, $tipo_E, $raza_E, $genero_E, $color_E, $lugarp_E, $lugare_E, $descripcion_E, $estado_E)
    {
        $this->_idmascota = $idmascota_E;
        $this->_documento = $documento_E;
        $this->_fecha = $fecha_E;
        $this->_nombrem = $nombrem_E;
        $this->_tipo = $tipo_E;
        $this->_raza = $raza_E;
        $this->_genero = $genero_E;
        $this->_color = $color_E;
        $this->_lugarp = $lugarp_E;
        $this->_lugare = $lugare_E;
        $this->_descripcion = $descripcion_E;
        $this->_estado = $estado_E;  
    }

    public function ConsultarPersona()
    {
        $this->obj_parsona->Set_DocumentoIdentidad($this->_documento);
        $respuesta = $this->obj_parsona->ConsultarDocumento();
        return $respuesta;
    }

    public function AlmacenarDatosMascota()
    {
        $this->obj_mascota->Set_Idmascota($this->_idmascota);
        $this->obj_mascota->Set_Fecha($this->_fecha);
        $this->obj_mascota->Set_Nombrem($this->_nombrem);
        $this->obj_mascota->Set_Tipo($this->_tipo);
        $this->obj_mascota->Set_Raza($this->_raza);
        $this->obj_mascota->Set_Genero($this->_genero);
        $this->obj_mascota->Set_Color($this->_color);
        $this->obj_mascota->Set_Lugarp($this->_lugarp);
        $this->obj_mascota->Set_Lugare($this->_lugare);
        $this->obj_mascota->Set_Descripcion($this->_descripcion);
        $this->obj_mascota->Set_Estado($this->_estado); 
        $this->obj_mascota->Set_Documento($this->_documento);
        $this->obj_mascota->RegistrarMascota();
    }
}

if($_POST)
{
    if(isset($_POST['idmascota']) && isset($_POST['documento']) && isset($_POST['fecha']) && isset($_POST['nombrem']) && isset($_POST['tipo']) && isset($_POST['raza']) && isset($_POST['genero']) && isset($_POST['color'])&& isset($_POST['lugarp'])&& isset($_POST['lugare'])&& isset($_POST['descripcion'])&& isset($_POST['estado']))
    {
        $control = new controladorRegistroMascotas();
        $control->CapturarDatosPost($_POST['idmascota'],$_POST['documento'],$_POST['fecha'],$_POST['nombrem'],$_POST['tipo'],$_POST['raza'],$_POST['genero'],$_POST['color'],$_POST['lugarp'],$_POST['lugare'],$_POST['descripcion'],$_POST['estado']);//pasar atributos a los paramentros
        $respuesta = $control->ConsultarPersona();
        if($respuesta == "YES")
        {
            $control->AlmacenarDatosMascota();
        }
        
    }
}
header("Location: PG12.html");

?>