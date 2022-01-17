<?php

class RolesappManager 
{

	public static function add(Rolesapp $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Rolesapp $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Rolesapp $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		return ClassServices::select(Rolesapp::getAttributes(),"Rolesapp",["IdRoleApp" => $id])[0];
	}

	public static function getList()
	{
 		return ClassServices::select(Rolesapp::getAttributes(),"Rolesapp");
	}
}