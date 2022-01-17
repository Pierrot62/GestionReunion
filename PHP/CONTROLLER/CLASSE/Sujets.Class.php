<?php

class Sujets 
{

	/*****************Attributs***************** */

	private $_IdSujet;
	private $_nomSujet;
	private $_dureeSujet;
	private $_IdUser;
	private $_IdReunion;
	private static $_attributes=["IdSujet","nomSujet","dureeSujet","IdUser","IdReunion"];
	/***************** Accesseurs ***************** */


	public function getIdSujet()
	{
		return $this->_IdSujet;
	}

	public function setIdSujet(int $IdSujet)
	{
		$this->_IdSujet=$IdSujet;
	}

	public function getNomSujet()
	{
		return $this->_nomSujet;
	}

	public function setNomSujet(string $nomSujet)
	{
		$this->_nomSujet=$nomSujet;
	}

	public function getDureeSujet()
	{
		return $this->_dureeSujet->format('%H:%I:%S');
	}

	public function setDureeSujet(string $dureeSujet)
	{
		$this->_dureeSujet=DateTime::createFromFormat("%h:%i:%s",$dureeSujet);
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
		return "IdSujet : ".$this->getIdSujet()."NomSujet : ".$this->getNomSujet()."DureeSujet : ".$this->getDureeSujet()."IdUser : ".$this->getIdUser()."IdReunion : ".$this->getIdReunion()."\n";
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