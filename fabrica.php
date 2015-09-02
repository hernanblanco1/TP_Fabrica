<?php
/*
-Razon social
-empleados(array persona)

-constructor(1 parametro)

-AgregarPersona($PER)

-ToString() muestra la razon social y cada to string de los empleados del array

-CalcularSalarios() retorna la suma de los sueldos

-SacarPersona($per) saca la persona

-Evitarduplicados() devuelve un array sin elementos duplicados (privado)
*/
require_once "empleado.php";

class Fabrica
{
	private $_razonsocial;
	private $_empleados = array();

	public function __construct($rs)
	{
		$this-> _razonsocial= $rs;
	}

	public function AgregarPersona($per)
	{
		array_push($this->_empleados, $per);
		$this->Evitarduplicados();
	}

	public function ToString()
	{
		$cadena;
		$cadena = "Razon Social: ".$this->_razonsocial."<br/>"."Empleados: "."<br/>";
		
		foreach ($this->_empleados as $emp)
		{
			$cadena.=$emp->ToString()."<br/>";
		}

		return $cadena;
	}

	public function CalcularSalarios()
	{
		$totalsalarios = 0;
		foreach ($this->_empleados as $emp)
		{
			$totalsalarios+=$emp->getSueldo();
		}
		return $totalsalarios;
	}

	public function SacarPersona($per)
	{
		$nuevoarray = array();
		$flagborrado = 0;

		foreach ($this->_empleados as $emp) 
		{
			if($emp->getLegajo() != $per->getLegajo() || $flagborrado == 0)
			{
				array_push($nuevoarray,$emp);
				$flagborrado=1;
			}
		}

		$this->_empleados=$nuevoarray;
	}

	private function EvitarDuplicados()
	{
		$cantelementos = count($this->_empleados);
		$i;
		$j;

		for($i=0;$i<$cantelementos-1;$i++)
		{
			for($j=$i+1;$j<$cantelementos;$j++)
			{
				if($this->_empleados[$i]->getLegajo() == $this->_empleados[$j]->getLegajo())
				{
					$this->SacarPersona($this->_empleados[$j]);
				}
			}
		}
	}
}
?>

