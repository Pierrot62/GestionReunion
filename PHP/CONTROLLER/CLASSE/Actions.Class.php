<?php

class Actions 
{

	/*****************Attributs***************** */

	private $_IdAction;
	private $_nomAction;
	private $_dateDeRealisation;
	private $_descAction;
	private $_etatAction;
	private $_IdUser;
	private $_IdReunion;
	private static $_attributes=["IdAction","nomAction","dateDeRealisation","descAction","etatAction","IdUser","IdReunion"];
	/***************** Accesseurs ***************** */


	public function getIdAction()
	{
		return $this->_IdAction;
	}

	public function setIdAction(int $IdAction)
	{
		$this->_IdAction=$IdAction;
	}

	public function getNomAction()
	{
		return $this->_nomAction;
	}

	public function setNomAction(string $nomAction)
	{
		$this->_nomAction=$nomAction;
	}

	public function getDateDeRealisation()
	{
		return $this->_dateDeRealisation->format('d/m/Y');
	}

	public function setDateDeRealisation(string $dateDeRealisation)
	{
		$this->_dateDeRealisation=DateTime::createFromFormat("Y-n-j",$dateDeRealisation);
	}

	public function getDescAction()
	{
		return $this->_descAction;
	}

	public function setDescAction(string $descAction)
	{
		$this->_descAction=$descAction;
	}

	public function getEtatAction()
	{
		return $this->_etatAction;
	}

	public function setEtatAction(string $etatAction)
	{
		$this->_etatAction=$etatAction;
	}

	public function getIdUser()
	{
		return $this->_IdUser;
	}

	public function setIdUser(int $IdUser)
	{
		$this->_IdUser=$IdUser;
	}

	public function getIdReunion()
	{
		return $this->_IdReunion;
	}

	public function setIdReunion(int $IdReunion)
	{
		$this->_IdReunion=$IdReunion;
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
		return "IdAction : ".$this->getIdAction()."NomAction : ".$this->getNomAction()."DateDeRealisation : ".$this->getDateDeRealisation()."DescAction : ".$this->getDescAction()."EtatAction : ".$this->getEtatAction()."IdUser : ".$this->getIdUser()."IdReunion : ".$this->getIdReunion()."\n";
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