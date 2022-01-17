<?php

class ParticipationsManager 
{

	public static function add(Participations $obj)
	{
 		Services::add($obj);
	}

	public static function update(Participations $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Participations $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Participations::getAttributes(),"Participations",["IdParticipation" => $id]);
	}

	public static function getList()
	{
 		Services::select(Participations::getAttributes(),"Participations");
	}
}