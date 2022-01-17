<?php

class FichiersreunionManager 
{

	public static function add(Fichiersreunion $obj)
	{
 		Services::add($obj);
	}

	public static function update(Fichiersreunion $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Fichiersreunion $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Fichiersreunion::getAttributes(),"Fichiersreunion",["IdFichierReunion" => $id]);
	}

	public static function getList()
	{
 		Services::select(Fichiersreunion::getAttributes(),"Fichiersreunion");
	}
}