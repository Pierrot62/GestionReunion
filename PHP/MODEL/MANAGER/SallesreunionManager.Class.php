<?php

class SallesreunionManager 
{

	public static function add(Sallesreunion $obj)
	{
 		Services::add($obj);
	}

	public static function update(Sallesreunion $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Sallesreunion $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Sallesreunion::getAttributes(),"Sallesreunion",["IdSalle" => $id]);
	}

	public static function getList()
	{
 		Services::select(Sallesreunion::getAttributes(),"Sallesreunion");
	}
}