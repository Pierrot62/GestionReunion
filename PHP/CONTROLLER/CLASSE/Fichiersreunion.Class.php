<?php

class Fichiersreunion 
{

	/*****************Attributs***************** */

	private $_IdFichierReunion;
	private $_nomFichierReunion;
	private $_hyperlienFichierReunion;
	private $_IdReunion;
	private static $_attributes=["IdFichierReunion","nomFichierReunion","hyperlienFichierReunion","IdReunion"];
	/***************** Accesseurs ***************** */


	public function getIdFichierReunion()
	{
		return $this->_IdFichierReunion;
	}

	public function setIdFichierReunion(int $IdFichierReunion)
	{
		$this->_IdFichierReunion=$IdFichierReunion;
	}

	public function getNomFichierReunion()
	{
		return $this->_nomFichierReunion;
	}

	public function setNomFichierReunion(string $nomFichierReunion)
	{
		$this->_nomFichierReunion=$nomFichierReunion;
	}

	public function getHyperlienFichierReunion()
	{
		return $this->_hyperlienFichierReunion;
	}

	public function setHyperlienFichierReunion(string $hyperlienFichierReunion)
	{
		$this->_hyperlienFichierReunion=$hyperlienFichierReunion;
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
		return "IdFichierReunion : ".$this->getIdFichierReunion()."NomFichierReunion : ".$this->getNomFichierReunion()."HyperlienFichierReunion : ".$this->getHyperlienFichierReunion()."IdReunion : ".$this->getIdReunion()."\n";
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