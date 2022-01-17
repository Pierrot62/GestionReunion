<?php

class ReunionsManager 
{

	public static function add(Reunions $obj)
	{
 		Services::add($obj);
	}

	public static function update(Reunions $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Reunions $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Reunions::getAttributes(),"Reunions",["IdReunion" => $id]);
	}

	public static function getList()
	{
 		Services::select(Reunions::getAttributes(),"Reunions");
	}
}