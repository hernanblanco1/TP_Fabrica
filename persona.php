<?php
/*

clase persona

- nombre (privados)
- apellido
- dni

-constructor(3 parametros)

-getters(x3)
-setters(x3)
-ToString():string
*/

abstract class Persona
{
	private $_nombre;
	private $_apelido;
	private $_dni;

	public function __construct($nomb,$ap,$doc)
	{
		$this->_nombre = $nomb;
		$this->_apellido = $ap;
		$this->_dni = $doc;
	}

	public function ToString()
	{
		return $this->_nombre." ".$this->_apellido." ".$this->_dni;
	}

	public function setNombre($nomb)
	{
		$this->_nombre = $nomb;
	}

	public function setApellido($ap)
	{
		$this->_apellido = $ap;
	}

	public function setDni($doc)
	{
		$this->_dni = $doc;
	}

	public function getNombre()
	{
		return $this->_nombre;
	}

	public function getApellido()
	{
		return $this->_apellido;
	}

	public function getDni()
	{
		return $this->_dni;
	}

	public abstract function Hablar($idioma);
 }
?>