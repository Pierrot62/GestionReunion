<?php

class Rolesreunion 
{

	/*****************Attributs***************** */

	private $_IdRoleReunion;
	private $_libelleRoleReunion;
	private static $_attributes=["IdRoleReunion","libelleRoleReunion"];
	/***************** Accesseurs ***************** */


	public function getIdRoleReunion()
	{
		return $this->_IdRoleReunion;
	}

	public function setIdRoleReunion(int $IdRoleReunion)
	{
		$this->_IdRoleReunion=$IdRoleReunion;
	}

	public function getLibelleRoleReunion()
	{
		return $this->_libelleRoleReunion;
	}

	public function setLibelleRoleReunion(string $libelleRoleReunion)
	{
		$this->_libelleRoleReunion=$libelleRoleReunion;
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
		return "IdRoleReunion : ".$this->getIdRoleReunion()."LibelleRoleReunion : ".$this->getLibelleRoleReunion()."\n";
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