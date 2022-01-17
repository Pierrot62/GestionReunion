<?php

class SondagesManager 
{

	public static function add(Sondages $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Sondages $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Sondages $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Sondages::getAttributes(),"Sondages",["IdSondage" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Sondages::getAttributes(),"Sondages");
	}
}