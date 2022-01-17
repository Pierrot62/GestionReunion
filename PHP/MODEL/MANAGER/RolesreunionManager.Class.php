<?php

class RolesreunionManager 
{

	public static function add(Rolesreunion $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Rolesreunion $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Rolesreunion $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Rolesreunion::getAttributes(),"Rolesreunion",["IdRoleReunion" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Rolesreunion::getAttributes(),"Rolesreunion");
	}
}