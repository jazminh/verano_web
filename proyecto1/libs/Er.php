<?php

class Er {
    
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_idnum($valor)
	{
		$exp_reg = "/^\d*$/";
		if (preg_match($exp_reg,$valor)){
		return true;
		}else{
		return false;
		}
	}	

	public function valida_nombre($valor)
	{
		$exp_reg = "/^([a-z]|[A-Z]|[[:blank:]]){1,45}$/";
		if (preg_match($exp_reg,$valor)){
		return true;
		}else{
		return false;
		}
	}
	
	
	public function valida_apellidos($valor)
	{
		$exp_reg = "/^([a-z]|[A-Z]|[[:blank:]]){1,50}$/";
		if (preg_match($exp_reg,$valor)){
		return true;
		}else{
		return false;
		}
	}

	public function valida_hora($valor)
	{
		$exp_reg = "/^(0[1-9]|1\d|2[0-3]):([0-5]\d):([0-5]\d)$/";
		if (preg_match($exp_reg,$valor)){
		return true;
		}else{
		return false;
		}
	}

	public function valida_fecha($valor)
	{	
		$exp_reg = "/^\d{1,2}\/\d{1,2}\/\d{2,4}$/";
		if (preg_match($exp_reg,$valor)){
		return true;
		}else{
		return false;
		}
	}
	

}

?>    