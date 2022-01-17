<?php

class FichiersreunionManager 
{

	public static function add(Fichiersreunion $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Fichiersreunion $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Fichiersreunion $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Fichiersreunion::getAttributes(),"Fichiersreunion",["IdFichierReunion" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Fichiersreunion::getAttributes(),"Fichiersreunion");
	}
}