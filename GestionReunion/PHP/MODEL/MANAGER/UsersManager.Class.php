<?php

class UsersManager 
{

	public static function add(Users $obj)
	{
 		Services::add($obj);
	}

	public static function update(Users $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Users $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Users::getAttributes(),"Users",["IdUser" => $id]);
	}

	public static function getList()
	{
 		Services::select(Users::getAttributes(),"Users");
	}
}