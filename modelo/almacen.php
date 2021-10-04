<<?php 
/**
 * 
 */
class almacen extends AnotherClass
{
	private $idProd;
	private $nombresProd;
	private $marcaProd;
	private $fechavencProd;
	private $CantidadEntrProd;
	private $fechaEntrProd;
	private $valorUnEntrProd;
	private $cantidadVendProd;
	private $valorUnComerProd;
	private $fechaSalidaProd;
	private $cantidadDispProd;
	private $utilidadProd;
	
	function __construct($idP, $nomP, $marP, $feVenP, $canEnP, $feEnP, $vaUnEnP, $canVenP, $vaUnCoP, $feSaP, $canDisP, $uti)
	{
		$this->$idProd=$idP;
	    $this->$nombresProd=$nomP;
	    $this->$marcaProd=$marP;
	    $this->$fechavencProd=$feVenP;
	    $this->$CantidadEntrProd=$canEnP;
	    $this->$fechaEntrProd=$feEnP;
	    $this->$valorUnEntrProd=$vaUnEnP;
	    $this->$cantidadVendProd=$canVenP;
	    $this->$valorUnComerProd=$vaUnCoP;
	    $this->$fechaSalidaProd=$feSaP;
	    $this->$cantidadDispProd=$canDisP;
	    $this->$utilidadProd=$uti;
		
	}

	public function obtenerIdP()
	{
		return $this->idProd;
	}

	public function obtenerNombreP()
	{
		return $this->nombresProd;
	}

	public function obtenerMarcaP()
	{
		return $this->marcaProd;
	}

	public function obtenerFechaVen()
	{
		return $this->fechavencProd;
	}

	public function obtenerCantEntProd()
	{
		return $this->CantidadEntrProd;
	}

	public function obtenerFechaEntrProd()
	{
		return $this->fechaEntrProd;
	}

	public function obtenerValorUniEntProd()
	{
		return $this->valorUnEntrProd;
	}

	public function obtenerCantidadVenProd()
	{
		return $this->cantidadVendProd;
	}

	public function obtenervalorUniCom()
	{
		return $this->valorUnComerProd;
	}

	public function obtenerFechaSalidaProd()
	{
		return $this->fechaSalidaProd;
	}

	public function obtenerCantidadDisProd()
	{
		return $this->cantidadDispProd;
	}

	public function obtenerUtilidad()
	{
		return $this->utilidadProd;
	}
}



 ?>