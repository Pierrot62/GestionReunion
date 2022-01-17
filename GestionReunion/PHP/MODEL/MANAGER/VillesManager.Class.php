<?php

class VillesManager 
{

	public static function add(Villes $obj)
	{
 		Services::add($obj);
	}

	public static function update(Villes $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Villes $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Villes::getAttributes(),"Villes",["IdVille" => $id]);
	}

	public static function getList()
	{
 		Services::select(Villes::getAttributes(),"Villes");
	}
}