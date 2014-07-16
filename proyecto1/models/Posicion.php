<?php

class Posicion extends Modelo{
    public $nombre_tabla = 'posicion';
    public $pk = 'idposicion';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'abreviatura'=>array(),
        
    );
    
    public $errores = array( );
    
    private $nombre;
    private $abreviatura;
    
       
    
    function Posicion(){
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

        $rs = $this->consulta_sql("select * from posicion where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = $valor;
        }
    }

    public function get_abreviacion(){
        return $this->abreviacion;
    } 

    public function set_abreviacion(){
     $this->abreviacion=$valor;
    } 

    
    
    
}

?>