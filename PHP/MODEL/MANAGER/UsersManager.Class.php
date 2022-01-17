<?php

class UsersManager 
{

	public static function add(Users $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Users $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Users $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Users::getAttributes(),"Users",["IdUser" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Users::getAttributes(),"Users");
	}
}