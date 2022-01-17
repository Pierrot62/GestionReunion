<?php

class VillesManager 
{

	public static function add(Villes $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Villes $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Villes $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Villes::getAttributes(),"Villes",["IdVille" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Villes::getAttributes(),"Villes");
	}
}