<?php

class IndiceArticulo extends Modelo{
    public $nombre_tabla = 'indice_articulo';
    public $pk = 'id_indice_articulo';
    
    
    public $atributos = array(
        'id_indice'=>array(),
        'id_articulo'=>array(),
        'numero'=>array(),
    );
    
    public $errores = array( );
    
    private $id_indice;
     private $id_articulo;
     private $numero;
       
    
    function IndiceArticulo(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_id_indice(){
        return $this->id_indice;
    } 

    public function set_id_indice($valor){

        $er = new Er();
        
        if ( !$er->valida_entero($valor) ){
            $this->errores[] = "Este id_indice (".$valor.") no es valido";
        }

       
    }

  public function get_id_articulo(){
        return $this->id_articulo;
    } 

    public function set_id_articulo($valor){

        $er = new Er();
        
        if ( !$er->valida_entero($valor) ){
            $this->errores[] = "Este id_articulo (".$valor.") no es valido";
        }

       
    }

      public function get_numero(){
        return $this->numero;
    } 

    public function set_numero($valor){

        $er = new Er();
        
        if ( !$er->valida_entero($valor) ){
            $this->errores[] = "Este numero (".$valor.") no es valido";
        }

       
    }    


    
    
    
}

?>