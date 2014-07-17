<?php

class Integrante extends Modelo{
    public $nombre_tabla = 'integrante';
    public $pk = 'idintegrante';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'peso'=>array(),
        'estatura'=>array(),
        'foto'=>array(),
        'Edad'=>array(),
        'idequipo'=>array(),
        
    );
    
    public $errores = array( );

    private $nombre;       
    private $apellido;    
    private $peso;
    private $estatura;   
    private $foto;    
    private $Edad;     
    private $idequipo;
    
    
       
    
    function Integrante(){
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

        $rs = $this->consulta_sql("select * from integrante where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = $valor;
        }
    }
    public function get_apellido(){
        return $this->apellido;
    } 

    public function set_apellido($valor){

        $er = new Er();
        
        if ( !$er->valida_apellidos($valor) ){
            $this->errores[] = "Este apellido (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from integrante where apellido = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este apellido (".$valor.") ya esta registrado"; 
        }else{
            $this->apellido = $valor;
        }
    }

    public function get_peso(){
        return $this->peso;
    } 

    public function set_peso($valor){

        $er = new Er();
        
        if ( !$er->valida_num($valor) ){
            $this->errores[] = "Este peso (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from integrante where peso = '$valor'");
        $rows = $rs->GetArray();
        $this->peso = $valor;
        
    } 


    public function get_estatura(){
        return $this->estatura;
    } 

    public function set_estatura($valor){

        $er = new Er();
        
        if ( !$er->valida_num($valor) ){
            $this->errores[] = "Esta estatura (".$valor.") no es valida";
        }

        $rs = $this->consulta_sql("select * from integrante where estatura = '$valor'");
        $rows = $rs->GetArray();
        $this->estatura = $valor;
        
    }

    public function get_foto(){
        return $this->foto;
    } 

    public function set_foto($valor){

        $this->foto = $valor;
        
    }

    public function get_edad(){
        return $this->edad;
    } 

    public function set_edad($valor){

        $er = new Er();
        
        if ( !$er->valida_num($valor) ){
            $this->errores[] = "Esta edad (".$valor.") no es valida";
        }

        $rs = $this->consulta_sql("select * from integrante where edad = '$valor'");
        $rows = $rs->GetArray();
        $this->edad = $valor;
        
    }


    public function get_idequipo(){
        return $this->idequipo;
    }
    
    public function set_idequipo($valor){
        $er = new Er();
        
        if ( !$er->valida_idnum($valor) ){
            $this->errores[] = "Este id (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from integrante where idequipo = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este id (".$valor.") ya esta registrado"; 
        }else{
            $this->idequipo = trim($valor);
        }
    }
    
    
    
}

?>