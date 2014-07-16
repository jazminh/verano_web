<?php

class Status extends Modelo{
    public $nombre_tabla = 'status';
    public $pk = 'idstatus';
    
    
    public $atributos = array(
        'status'=>array(),
        
        
    );
    
    public $errores = array( );
    
    private $status;
    
    
       
    
    function Status(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_status(){
        return $this->status;
    } 

    public function set_status($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este status (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from status where status = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este status (".$valor.") ya esta registrado"; 
        }else{
            $this->status = $valor;
        }
    }

}

?>