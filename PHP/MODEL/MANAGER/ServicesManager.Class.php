<?php

class ServicesManager 
{

	public static function add(Services $obj)
	{
		ClassServices::add($obj);
	}

	public static function update(Services $obj)
	{
		ClassServices::update($obj);
	}

	public static function delete(Services $obj)
	{
		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
		ClassServices::select(Services::getAttributes(),"Services",["IdService" => $id]);
	}

	public static function getList()
	{
		ClassServices::select(Services::getAttributes(),"Services");
	}
}