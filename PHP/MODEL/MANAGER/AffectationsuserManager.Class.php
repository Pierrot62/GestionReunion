<?php

class AffectationsuserManager 
{

	public static function add(Affectationsuser $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Affectationsuser $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Affectationsuser $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Affectationsuser::getAttributes(),"Affectationsuser",["IdAffectionUser" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Affectationsuser::getAttributes(),"Affectationsuser");
	}
}