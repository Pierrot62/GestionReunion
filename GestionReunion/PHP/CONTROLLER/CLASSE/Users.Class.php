<?php

class Users 
{

	/*****************Attributs***************** */

	private $_IdUser;
	private $_nomUser;
	private $_prenomUser;
	private $_DDNUser;
	private $_emailUser;
	private $_motDePasseUser;
	private $_IdRoleApp;
	private static $_attributes=["IdUser","nomUser","prenomUser","DDNUser","emailUser","motDePasseUser","IdRoleApp"];
	/***************** Accesseurs ***************** */


	public function getIdUser()
	{
		return $this->_IdUser;
	}

	public function setIdUser(int $IdUser)
	{
		$this->_IdUser=$IdUser;
	}

	public function getNomUser()
	{
		return $this->_nomUser;
	}

	public function setNomUser(string $nomUser)
	{
		$this->_nomUser=$nomUser;
	}

	public function getPrenomUser()
	{
		return $this->_prenomUser;
	}

	public function setPrenomUser(string $prenomUser)
	{
		$this->_prenomUser=$prenomUser;
	}

	public function getDDNUser()
	{
		return $this->_DDNUser->format('d/m/Y');
	}

	public function setDDNUser(string $DDNUser)
	{
		$this->_DDNUser=DateTime::createFromFormat("Y-n-j",$DDNUser);
	}

	public function getEmailUser()
	{
		return $this->_emailUser;
	}

	public function setEmailUser(string $emailUser)
	{
		$this->_emailUser=$emailUser;
	}

	public function getMotDePasseUser()
	{
		return $this->_motDePasseUser;
	}

	public function setMotDePasseUser(string $motDePasseUser)
	{
		$this->_motDePasseUser=$motDePasseUser;
	}

	public function getIdRoleApp()
	{
		return $this->_IdRoleApp;
	}

	public function setIdRoleApp(int $IdRoleApp)
	{
		$this->_IdRoleApp=$IdRoleApp;
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
		return "IdUser : ".$this->getIdUser()."NomUser : ".$this->getNomUser()."PrenomUser : ".$this->getPrenomUser()."DDNUser : ".$this->getDDNUser()."EmailUser : ".$this->getEmailUser()."MotDePasseUser : ".$this->getMotDePasseUser()."IdRoleApp : ".$this->getIdRoleApp()."\n";
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