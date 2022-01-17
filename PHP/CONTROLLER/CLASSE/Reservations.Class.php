<?php

class Reservations 
{

	/*****************Attributs***************** */

	private $_IdReservation;
	private $_IdReunion;
	private $_IdSalle;
	private $_dateDebutReservation;
	private $_dateFinReservation;
	private static $_attributes=["IdReservation","IdReunion","IdSalle","dateDebutReservation","dateFinReservation"];
	/***************** Accesseurs ***************** */


	public function getIdReservation()
	{
		return $this->_IdReservation;
	}

	public function setIdReservation(int $IdReservation)
	{
		$this->_IdReservation=$IdReservation;
	}

	public function getIdReunion()
	{
		return $this->_IdReunion;
	}

	public function setIdReunion(int $IdReunion)
	{
		$this->_IdReunion=$IdReunion;
	}

	public function getIdSalle()
	{
		return $this->_IdSalle;
	}

	public function setIdSalle(int $IdSalle)
	{
		$this->_IdSalle=$IdSalle;
	}

	public function getDateDebutReservation()
	{
		return $this->_dateDebutReservation->format('d/m/Y');
	}

	public function setDateDebutReservation(string $dateDebutReservation)
	{
		$this->_dateDebutReservation=DateTime::createFromFormat("Y-n-j",$dateDebutReservation);
	}

	public function getDateFinReservation()
	{
		return $this->_dateFinReservation->format('d/m/Y');
	}

	public function setDateFinReservation(string $dateFinReservation)
	{
		$this->_dateFinReservation=DateTime::createFromFormat("Y-n-j",$dateFinReservation);
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
		return "IdReservation : ".$this->getIdReservation()."IdReunion : ".$this->getIdReunion()."IdSalle : ".$this->getIdSalle()."DateDebutReservation : ".$this->getDateDebutReservation()."DateFinReservation : ".$this->getDateFinReservation()."\n";
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