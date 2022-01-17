<?php

class Organisations 
{

	/*****************Attributs***************** */

	private $_IdOrganisation;
	private $_nomOrg;
	private $_adresseOrg;
	private $_villeOrg;
	private $_paysOrg;
	private $_codePostalOrg;
	private $_horaireDebutOrg;
	private $_HoraireFinOrg;
	private $_numTelOrg;
	private $_emailOrg;
	private static $_attributes=["IdOrganisation","nomOrg","adresseOrg","villeOrg","paysOrg","codePostalOrg","horaireDebutOrg","HoraireFinOrg","numTelOrg","emailOrg"];
	/***************** Accesseurs ***************** */


	public function getIdOrganisation()
	{
		return $this->_IdOrganisation;
	}

	public function setIdOrganisation(int $IdOrganisation)
	{
		$this->_IdOrganisation=$IdOrganisation;
	}

	public function getNomOrg()
	{
		return $this->_nomOrg;
	}

	public function setNomOrg(string $nomOrg)
	{
		$this->_nomOrg=$nomOrg;
	}

	public function getAdresseOrg()
	{
		return $this->_adresseOrg;
	}

	public function setAdresseOrg(string $adresseOrg)
	{
		$this->_adresseOrg=$adresseOrg;
	}

	public function getVilleOrg()
	{
		return $this->_villeOrg;
	}

	public function setVilleOrg(string $villeOrg)
	{
		$this->_villeOrg=$villeOrg;
	}

	public function getPaysOrg()
	{
		return $this->_paysOrg;
	}

	public function setPaysOrg(string $paysOrg)
	{
		$this->_paysOrg=$paysOrg;
	}

	public function getCodePostalOrg()
	{
		return $this->_codePostalOrg;
	}

	public function setCodePostalOrg(string $codePostalOrg)
	{
		$this->_codePostalOrg=$codePostalOrg;
	}

	public function getHoraireDebutOrg()
	{
		return $this->_horaireDebutOrg;
	}

	public function setHoraireDebutOrg(string $horaireDebutOrg)
	{
		$this->_horaireDebutOrg=$horaireDebutOrg;
	}

	public function getHoraireFinOrg()
	{
		return $this->_HoraireFinOrg;
	}

	public function setHoraireFinOrg(string $HoraireFinOrg)
	{
		$this->_HoraireFinOrg=$HoraireFinOrg;
	}

	public function getNumTelOrg()
	{
		return $this->_numTelOrg;
	}

	public function setNumTelOrg(string $numTelOrg)
	{
		$this->_numTelOrg=$numTelOrg;
	}

	public function getEmailOrg()
	{
		return $this->_emailOrg;
	}

	public function setEmailOrg(string $emailOrg)
	{
		$this->_emailOrg=$emailOrg;
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
		return "IdOrganisation : ".$this->getIdOrganisation()."NomOrg : ".$this->getNomOrg()."AdresseOrg : ".$this->getAdresseOrg()."VilleOrg : ".$this->getVilleOrg()."PaysOrg : ".$this->getPaysOrg()."CodePostalOrg : ".$this->getCodePostalOrg()."HoraireDebutOrg : ".$this->getHoraireDebutOrg()."HoraireFinOrg : ".$this->getHoraireFinOrg()."NumTelOrg : ".$this->getNumTelOrg()."EmailOrg : ".$this->getEmailOrg()."\n";
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