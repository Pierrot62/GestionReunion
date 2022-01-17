<?php

class Pays 
{

	/*****************Attributs***************** */

	private $_IdPays;
	private $_LibellePays;
	private static $_attributes=["IdPays","LibellePays"];
	/***************** Accesseurs ***************** */


	public function getIdPays()
	{
		return $this->_IdPays;
	}

	public function setIdPays(int $IdPays)
	{
		$this->_IdPays=$IdPays;
	}

	public function getLibellePays()
	{
		return $this->_LibellePays;
	}

	public function setLibellePays(string $LibellePays)
	{
		$this->_LibellePays=$LibellePays;
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
		return "IdPays : ".$this->getIdPays()."LibellePays : ".$this->getLibellePays()."\n";
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