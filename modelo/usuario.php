<<?php 

/**
 * 
 */
class usuario extends AnotherClass
{
	private $idUsu;
	private $nombres;
	private $apellidos;
	private $cedula;
	private $email;
	private $usuario;
	private $password;
	private $rol;
	private $privilegios;

	function __construct($id, $nom, $ape, $ced, $ema, $usu, $pass, $rol, $priv)
	{
		$this->$idUsu=$id,
		$this->$nombres=$nom;
	    $this->$apellidos=$ape;
	    $this->$cedula=$ced;
	    $this->$email=$ema;
	    $this->$usuario=$usu;
	    $this->$password=$pass;
	    $this->$rol=$rol;
	    $this->$privilegios=$priv;

	}

	public function obtenerIdUsu()
	{
		return $this->idUsu;
	}

	public function obtenerNombres()
	{
		return $this->nombres;
	}

	public function obtenerApellidos()
	{
		return $this->apellidos;
	}

	public function obtenerCedula()
	{
		return $this->cedula;
	}

	public function obtenerEmail()
	{
		return $this->email;
	}

	public function obtenerUsuario()
	{
		return $this->usuario;
	}

	public function obtenerPassword()
	{
		return $this->password;
	}

	public function obtenerRol()
	{
		return $this->rol;
	}

	public function obtenerPrivilegios()
	{
		return $this->privilegios;
	}


}


 ?>