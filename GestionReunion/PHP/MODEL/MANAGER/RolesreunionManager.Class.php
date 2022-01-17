<?php

class RolesreunionManager 
{

	public static function add(Rolesreunion $obj)
	{
 		Services::add($obj);
	}

	public static function update(Rolesreunion $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Rolesreunion $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Rolesreunion::getAttributes(),"Rolesreunion",["IdRoleReunion" => $id]);
	}

	public static function getList()
	{
 		Services::select(Rolesreunion::getAttributes(),"Rolesreunion");
	}
}