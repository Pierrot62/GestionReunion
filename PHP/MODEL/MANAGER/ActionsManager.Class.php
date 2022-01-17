<?php

class ActionsManager 
{

	public static function add(Actions $obj)
	{
 		Services::add($obj);
	}

	public static function update(Actions $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Actions $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Actions::getAttributes(),"Actions",["IdAction" => $id]);
	}

	public static function getList()
	{
 		Services::select(Actions::getAttributes(),"Actions");
	}
}