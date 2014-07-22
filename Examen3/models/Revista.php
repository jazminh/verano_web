
<?php

class Revista extends Modelo{
    public $nombre_tabla = 'revista';
    public $pk = 'id_revista';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'portada'=>array(),
        'fecha'=>array(),
        'volumen'=>array(),
        'titulo'=>array(),
        'subtitulo'=>array(),
        'id_club'=>array(),
        'numero'=>array(),
        'clave'=>array(),
        'directorio'=>array(),
        'editorial'=>array(),
        'id_status'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $portada;
    private $fecha;
    private $volumen;
    private $titulo;
    private $subtitulo;
    private $id_club;
    private $numero;
    private $clave;
    private $directorio;
    private $editorial;
    private $id_status;
    
   
    function Revista(){
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

        $rs = $this->consulta_sql("select * from revista where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = $valor;
        }
    }

    public function get_portada(){
        return $this->portada;
    } 

    public function set_portada($valor){

           $er = new Er();
        
        if ( !$er->valida_imagen($valor['name']) ){
            $this->errores[] = "Esta imagen (".$valor.") no es valida";
        }

            $this->portada = $valor['name'];
        
    }


    public function get_fecha(){
        return $this->fecha;
    } 

    public function set_fecha($valor){

            $this->fecha = $valor;
        
    }

    public function get_volumen(){
        return $this->volumen;
    } 

    public function set_volumen($valor){

            $this->volumen = $valor;
        
    }

    public function get_titulo(){
        return $this->titulo;
    } 

    public function set_titulo($valor){

            $this->titulo = $valor;
        
    }

    public function get_subtitulo(){
        return $this->subtitulo;
    } 

    public function set_subtitulo($valor){

            $this->subtitulo = $valor;
        
    }

      public function get_id_club(){
        return $this->id_club;
    } 

    public function set_id_club($valor){

            $this->id_club = $valor;
        
    }


    public function get_numero(){
        return $this->numero;
    }
    
    public function set_numero($valor){
        $er = new Er();
        
        if ( !$er->valida_entero($valor) ){
            $this->errores[] = "Este numero (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from revista where numero = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este numero (".$valor.") ya esta registrado"; 
        }else{
            $this->numero = trim($valor);
        }
    }

    public function get_clave(){
        return $this->clave;
    } 

    public function set_clave($valor){

        $er = new Er();
        
        $rs = $this->consulta_sql("select * from revista where clave = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este clave (".$valor.") ya esta registrada"; 
        }else{
            $this->clave = $valor;
        }
    }

    public function get_directorio(){
        return $this->directorio;
    } 

    public function set_directorio($valor){

            $this->directorio = $valor;
        
    }

    public function get_editorial(){
        return $this->editorial;
    } 

    public function set_editorial($valor){

            $this->editorial = $valor;
        
    }


    
    public function get_id_status(){
        return $this->id_status;
    }
    
    public function set_id_status($valor){
        $er = new Er();
        
        if ( !$er->valida_entero($valor) ){
            $this->errores[] = "Este id (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from revista where id_status = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este id (".$valor.") ya esta registrado"; 
        }else{
            $this->id_status = trim($valor);
        }
    }
    }
?>