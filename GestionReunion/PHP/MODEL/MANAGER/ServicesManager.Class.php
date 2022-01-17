<?php

class ServicesManager 
{

	public static function add(Services $obj)
	{
 		Services::add($obj);
	}

	public static function update(Services $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Services $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Services::getAttributes(),"Services",["IdService" => $id]);
	}

	public static function getList()
	{
 		Services::select(Services::getAttributes(),"Services");
	}
}