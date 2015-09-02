<?php

/*
clase empleado:persona (en archivo fisico distinto)

-legajo
-sueldo

constructor(5 parametros)

-getters(x2)
-setters(x2)
-ToString():string

-Hablar($Idioma):string   abstracto
*/

require_once "persona.php";
class Empleado extends Persona
{
	private $_legajo;
	private $_sueldo;

	public function __construct($nomb,$ap,$doc,$leg,$suel)
	{
		parent::__construct($nomb,$ap,$doc);
		$this->_legajo = $leg;
		$this->_sueldo = $suel;
	}

	public function ToString()
	{
		return parent::ToString()." ".$this->_legajo." ".$this->_sueldo;
	}

	public function setLegajo($leg)
	{
		$this->_legajo=$leg;
	}

	public function setSueldo($suel)
	{
		$this->_sueldo=$suel;
	}

	public function getLegajo()
	{
		return $this->_legajo;
	}

	public function getSueldo()
	{
		return $this->_sueldo;
	}

	public function Hablar($idioma)
	{
		echo "La persona habla: ".$idioma;
	}
}
	?>