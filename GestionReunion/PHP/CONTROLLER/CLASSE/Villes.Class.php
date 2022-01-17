<?php

class Villes 
{

	/*****************Attributs***************** */

	private $_IdVille;
	private $_LibelleVille;
	private $_CodePostale;
	private $_IdPays;
	private static $_attributes=["IdVille","LibelleVille","CodePostale","IdPays"];
	/***************** Accesseurs ***************** */


	public function getIdVille()
	{
		return $this->_IdVille;
	}

	public function setIdVille(int $IdVille)
	{
		$this->_IdVille=$IdVille;
	}

	public function getLibelleVille()
	{
		return $this->_LibelleVille;
	}

	public function setLibelleVille(string $LibelleVille)
	{
		$this->_LibelleVille=$LibelleVille;
	}

	public function getCodePostale()
	{
		return $this->_CodePostale;
	}

	public function setCodePostale(string $CodePostale)
	{
		$this->_CodePostale=$CodePostale;
	}

	public function getIdPays()
	{
		return $this->_IdPays;
	}

	public function setIdPays(int $IdPays)
	{
		$this->_IdPays=$IdPays;
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
		return "IdVille : ".$this->getIdVille()."LibelleVille : ".$this->getLibelleVille()."CodePostale : ".$this->getCodePostale()."IdPays : ".$this->getIdPays()."\n";
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