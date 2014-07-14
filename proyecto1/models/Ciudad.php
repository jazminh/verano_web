<?php

class Ciudad extends Modelo{
    public $nombre_tabla = 'ciudad';
    public $pk = 'idciudad';
    
    
    public $atributos = array(
        'Nombre'=>array(),
        
    );
    
    public $errores = array( );
    
    private $Nombre;
    
       
    
    function Ciudad(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_Nombre(){
        return $this->Nombre;
    } 

    public function set_Nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from ciudad where Nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->Nombre = $valor;
        }
    }

    
    


    
    
    
}

?>