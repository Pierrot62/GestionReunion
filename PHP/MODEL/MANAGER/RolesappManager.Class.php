<?php

class RolesappManager 
{

	public static function add(Rolesapp $obj)
	{
 		Services::add($obj);
	}

	public static function update(Rolesapp $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Rolesapp $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Rolesapp::getAttributes(),"Rolesapp",["IdRoleApp" => $id]);
	}

	public static function getList()
	{
 		Services::select(Rolesapp::getAttributes(),"Rolesapp");
	}
}