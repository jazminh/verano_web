<?php

class Articulo extends Modelo{
    public $nombre_tabla = 'articulo';
    public $pk = 'id_articulo';
    
    
    public $atributos = array(
        'nombre'=>array(),
		'resumen'=>array(),
        'abstract'=>array(),
		'introduccion'=>array(),
		'metodologia'=>array(),
		'contenido'=>array(),
		'fecha_creacion'=>array(),
        'archivo_pdf'=>array(),
        'id_status'=>array(),
        'conclusiones'=>array(),
        'agradecimientos'=>array(),
        'referencias'=>array(),
        
    );
    
    public $errores = array( );
    
    private $nombre;
    private $resumen;
	private $abstract;
	private $introduccion;
	private $metodologia;
	private $contenido;
    private $fecha_creacion;
    private $archivo_pdf;
    private $id_status;
    private $conclusiones;
    private $agradecimientos;
    private $referencias;
       
    
    function Articulo(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

    }
    public function get_archivo_pdf(){
        return $this->archivo_pdf;
    }

    public function set_archivo_pdf($valor){

        $er = new Er();
        
        if ( !$er->valida_pdf($valor) ){
            $this->errores[] = "(".$valor.") no es pdf";
        }

    }
	public function get_id_status(){
        return $this->id_status;
    }

	public function set_id_status($valor){

        $er = new Er();
        
        if ( !$er->valida_entero($valor) ){
            $this->errores[] = "Este id (".$valor.") no es valido";
        }

    }

	
    
    
    
}

?>