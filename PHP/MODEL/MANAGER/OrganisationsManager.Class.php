<?php

class OrganisationsManager 
{

	public static function add(Organisations $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Organisations $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Organisations $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Organisations::getAttributes(),"Organisations",["IdOrganisation" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Organisations::getAttributes(),"Organisations");
	}
}