<?php

class Affectationsuser 
{

	/*****************Attributs***************** */

	private $_IdAffectionUser;
	private $_IdUser;
	private $_IdService;
	private $_DateDebut;
	private $_Role;
	private $_DateFin;
	private static $_attributes=["IdAffectionUser","IdUser","IdService","DateDebut","Role","DateFin"];
	/***************** Accesseurs ***************** */


	public function getIdAffectionUser()
	{
		return $this->_IdAffectionUser;
	}

	public function setIdAffectionUser(int $IdAffectionUser)
	{
		$this->_IdAffectionUser=$IdAffectionUser;
	}

	public function getIdUser()
	{
		return $this->_IdUser;
	}

	public function setIdUser(int $IdUser)
	{
		$this->_IdUser=$IdUser;
	}

	public function getIdService()
	{
		return $this->_IdService;
	}

	public function setIdService(int $IdService)
	{
		$this->_IdService=$IdService;
	}

	public function getDateDebut()
	{
		return $this->_DateDebut->format('d/m/Y');
	}

	public function setDateDebut(string $DateDebut)
	{
		$this->_DateDebut=DateTime::createFromFormat("Y-n-j",$DateDebut);
	}

	public function getRole()
	{
		return $this->_Role;
	}

	public function setRole(string $Role)
	{
		$this->_Role=$Role;
	}

	public function getDateFin()
	{
		return $this->_DateFin->format('d/m/Y');
	}

	public function setDateFin(string $DateFin)
	{
		$this->_DateFin=DateTime::createFromFormat("Y-n-j",$DateFin);
	}

	public static function getAttributes()
	{
		return self::$_attributes;
	}

	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
 		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
 		foreach ($data as $key => $value)
		{
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}

	/*****************Autres Méthodes***************** */

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString()
	{
		return "IdAffectionUser : ".$this->getIdAffectionUser()."IdUser : ".$this->getIdUser()."IdService : ".$this->getIdService()."DateDebut : ".$this->getDateDebut()."Role : ".$this->getRole()."DateFin : ".$this->getDateFin()."\n";
	}


	
	/* Renvoit Vrai si lobjet en paramètre est égal 
	* à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo($obj)
	{
		return;
	}


	/**
	* Compare l'objet à un autre
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*      - 1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return Integer
	*/
	public function compareTo($obj)
	{
		return;
	}
}