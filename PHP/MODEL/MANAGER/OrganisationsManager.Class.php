<?php

class OrganisationsManager 
{

	public static function add(Organisations $obj)
	{
 		Services::add($obj);
	}

	public static function update(Organisations $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Organisations $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Organisations::getAttributes(),"Organisations",["IdOrganisation" => $id]);
	}

	public static function getList()
	{
 		Services::select(Organisations::getAttributes(),"Organisations");
	}
}