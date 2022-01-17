<?php

class PaysManager 
{

	public static function add(Pays $obj)
	{
 		Services::add($obj);
	}

	public static function update(Pays $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Pays $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Pays::getAttributes(),"Pays",["IdPays" => $id]);
	}

	public static function getList()
	{
 		Services::select(Pays::getAttributes(),"Pays");
	}
}