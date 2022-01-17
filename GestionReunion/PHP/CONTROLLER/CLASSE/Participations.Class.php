<?php

class Participations 
{

	/*****************Attributs***************** */

	private $_IdParticipation;
	private $_IdUser;
	private $_IdReunion;
	private $_IdRoleReunion;
	private static $_attributes=["IdParticipation","IdUser","IdReunion","IdRoleReunion"];
	/***************** Accesseurs ***************** */


	public function getIdParticipation()
	{
		return $this->_IdParticipation;
	}

	public function setIdParticipation(int $IdParticipation)
	{
		$this->_IdParticipation=$IdParticipation;
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

	public function getIdRoleReunion()
	{
		return $this->_IdRoleReunion;
	}

	public function setIdRoleReunion(int $IdRoleReunion)
	{
		$this->_IdRoleReunion=$IdRoleReunion;
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
		return "IdParticipation : ".$this->getIdParticipation()."IdUser : ".$this->getIdUser()."IdReunion : ".$this->getIdReunion()."IdRoleReunion : ".$this->getIdRoleReunion()."\n";
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