<?php

class AffectationsuserManager 
{

	public static function add(Affectationsuser $obj)
	{
 		Services::add($obj);
	}

	public static function update(Affectationsuser $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Affectationsuser $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Affectationsuser::getAttributes(),"Affectationsuser",["IdAffectionUser" => $id]);
	}

	public static function getList()
	{
 		Services::select(Affectationsuser::getAttributes(),"Affectationsuser");
	}
}