<?php

class Sondages 
{

	/*****************Attributs***************** */

	private $_IdSondage;
	private $_nomSondage;
	private $_propositonSondage;
	private $_resultatSondage;
	private $_IdReunion;
	private static $_attributes=["IdSondage","nomSondage","propositonSondage","resultatSondage","IdReunion"];
	/***************** Accesseurs ***************** */


	public function getIdSondage()
	{
		return $this->_IdSondage;
	}

	public function setIdSondage(int $IdSondage)
	{
		$this->_IdSondage=$IdSondage;
	}

	public function getNomSondage()
	{
		return $this->_nomSondage;
	}

	public function setNomSondage(string $nomSondage)
	{
		$this->_nomSondage=$nomSondage;
	}

	public function getPropositonSondage()
	{
		return $this->_propositonSondage;
	}

	public function setPropositonSondage(string $propositonSondage)
	{
		$this->_propositonSondage=$propositonSondage;
	}

	public function getResultatSondage()
	{
		return $this->_resultatSondage;
	}

	public function setResultatSondage(string $resultatSondage)
	{
		$this->_resultatSondage=$resultatSondage;
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
		return "IdSondage : ".$this->getIdSondage()."NomSondage : ".$this->getNomSondage()."PropositonSondage : ".$this->getPropositonSondage()."ResultatSondage : ".$this->getResultatSondage()."IdReunion : ".$this->getIdReunion()."\n";
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