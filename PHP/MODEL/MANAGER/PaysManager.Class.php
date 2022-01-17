<?php

class PaysManager 
{

	public static function add(Pays $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Pays $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Pays $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Pays::getAttributes(),"Pays",["IdPays" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Pays::getAttributes(),"Pays");
	}
}