<?php

class SondagesManager 
{

	public static function add(Sondages $obj)
	{
 		Services::add($obj);
	}

	public static function update(Sondages $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Sondages $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Sondages::getAttributes(),"Sondages",["IdSondage" => $id]);
	}

	public static function getList()
	{
 		Services::select(Sondages::getAttributes(),"Sondages");
	}
}