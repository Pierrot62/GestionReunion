<?php

class Sallesreunion 
{

	/*****************Attributs***************** */

	private $_IdSalle;
	private $_NumSalle;
	private $_IdOrganisation;
	private static $_attributes=["IdSalle","NumSalle","IdOrganisation"];
	/***************** Accesseurs ***************** */


	public function getIdSalle()
	{
		return $this->_IdSalle;
	}

	public function setIdSalle(int $IdSalle)
	{
		$this->_IdSalle=$IdSalle;
	}

	public function getNumSalle()
	{
		return $this->_NumSalle;
	}

	public function setNumSalle(int $NumSalle)
	{
		$this->_NumSalle=$NumSalle;
	}

	public function getIdOrganisation()
	{
		return $this->_IdOrganisation;
	}

	public function setIdOrganisation(int $IdOrganisation)
	{
		$this->_IdOrganisation=$IdOrganisation;
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
		return "IdSalle : ".$this->getIdSalle()."NumSalle : ".$this->getNumSalle()."IdOrganisation : ".$this->getIdOrganisation()."\n";
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