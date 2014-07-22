<?php

class Indice extends Modelo{
    public $nombre_tabla = 'indice';
    public $pk = 'id_indice';
    
    
    public $atributos = array(
        'titulo'=>array(),
        'numero'=>array(),
        'id_revista'=>array(),
    );
    
    public $errores = array( );
    
    private $titulo;
    private $numero;
    private $id_revista;
       
    
    function Indice(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_titulo(){
        return $this->titulo;
    } 

    public function set_titulo($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este titulo (".$valor.") no es valido";
        }
        $this->titulo = $valor;
    }

    
public function get_numero(){
        return $this->numero;
    }

    public function set_numero($valor){

        $er = new Er();
        
        if ( !$er->valida_entero($valor) ){
            $this->errores[] = "Este numero (".$valor.") no es valido";
        }
        $this->numero = $valor;

    }

public function get_id_revista(){
        return $this->id_revista;
    }

    public function set_id_revista($valor){

        $er = new Er();
        
        if ( !$er->valida_entero($valor) ){
            $this->errores[] = "Este id (".$valor.") no es valido";
        }
          $this->id_revista = $valor;
    }    
    
    
}

?>