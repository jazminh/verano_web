<?php

class Equipo extends Modelo{
    public $nombre_tabla = 'equipo';
    public $pk = 'idequipo';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'idpais'=>array(),
        'escudo'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $idpais;
    private $escudo;

       
    
    function Equipo(){
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

        $rs = $this->consulta_sql("select * from equipo where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = $valor;
        }
    }

    public function get_idpais(){
        return $this->idpais;
    }
    
    public function set_idpais($valor){
        $er = new Er();
        
        if ( !$er->valida_idnum($valor) ){
            $this->errores[] = "Este id (".$valor.") no es valido";
        }else{
            $this->idpais = trim($valor);
        }
    }
    
    public function get_escudo(){
        return $this->escudo;
    }
    
    public function set_escudo($valor){
        $er = new Er();
        
        $intento=trim($valor['name']);
        $tipo=trim($valor['type']);
        $tam=trim($valor['size']);

         if ($er->valida_tipo($tipo) )
        {

            if($er->valida_tam($tam)){

                if ( !$er->valida_imagen($intento) ){
                    $this->errores[] = "1: Este archivo (".$valor['name'].") no es valido";
                }else{
                    $this->escudo = trim($valor['name']);
                }
            }else{
                $this->errores[] = "2: Este archivo (".$valor['name'].") no es valido";
                
                }
        }else{
        $this->errores[] = "3: Este archivo (".$valor['name'].") no es valido";
        
        }
    }
    


    

    
    
    
}

?>
