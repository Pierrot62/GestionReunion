<?php

class SallesreunionManager 
{

	public static function add(Sallesreunion $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Sallesreunion $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Sallesreunion $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Sallesreunion::getAttributes(),"Sallesreunion",["IdSalle" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Sallesreunion::getAttributes(),"Sallesreunion");
	}
}