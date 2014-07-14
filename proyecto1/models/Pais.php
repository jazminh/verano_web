<?php

class Pais extends Modelo{
    public $nombre_tabla = 'pais';
    public $pk = 'idpais';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'bandera'=>array(),
        'idcontinente'=>array(),

    );
    
    public $errores = array( );
    
    private $nombre;
    private $bandera;
    private $idcontinente;
       
    
    function Pais(){
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

        $rs = $this->consulta_sql("select * from pais where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = trim($valor);
        }
    }

    public function get_bandera(){
        return $this->bandera;
    }
    
    public function set_bandera($valor){
        $this->bandera = trim($valor);
    }
    
    public function get_idcontinente(){
        return $this->idcontinente;
    }
    
    public function set_idcontinente($valor){
        $er = new Er();
        
        if ( !$er->valida_idnum($valor) ){
            $this->errores[] = "Este id (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from pais where idcontinente = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este id (".$valor.") ya esta registrado"; 
        }else{
            $this->idcontinente = $valor;
        }
    }

    
    
    
}

?>