<?php

class ParticipationsManager 
{

	public static function add(Participations $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Participations $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Participations $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Participations::getAttributes(),"Participations",["IdParticipation" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Participations::getAttributes(),"Participations");
	}
}