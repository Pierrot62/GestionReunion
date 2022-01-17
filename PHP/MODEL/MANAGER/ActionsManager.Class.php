<?php

class ActionsManager 
{

	public static function add(Actions $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Actions $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Actions $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Actions::getAttributes(),"Actions",["IdAction" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Actions::getAttributes(),"Actions");
	}
}