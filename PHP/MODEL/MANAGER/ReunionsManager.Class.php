<?php

class ReunionsManager 
{

	public static function add(Reunions $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Reunions $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Reunions $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Reunions::getAttributes(),"Reunions",["IdReunion" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Reunions::getAttributes(),"Reunions");
	}
}