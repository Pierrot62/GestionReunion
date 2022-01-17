<?php

class Rolesapp 
{

	/*****************Attributs***************** */

	private $_IdRoleApp;
	private $_libelleRoleApp;
	private static $_attributes=["IdRoleApp","libelleRoleApp"];
	/***************** Accesseurs ***************** */


	public function getIdRoleApp()
	{
		return $this->_IdRoleApp;
	}

	public function setIdRoleApp(int $IdRoleApp)
	{
		$this->_IdRoleApp=$IdRoleApp;
	}

	public function getLibelleRoleApp()
	{
		return $this->_libelleRoleApp;
	}

	public function setLibelleRoleApp(string $libelleRoleApp)
	{
		$this->_libelleRoleApp=$libelleRoleApp;
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
		return "IdRoleApp : ".$this->getIdRoleApp()."LibelleRoleApp : ".$this->getLibelleRoleApp()."\n";
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