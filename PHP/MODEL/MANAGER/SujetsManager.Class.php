<?php

class SujetsManager 
{

	public static function add(Sujets $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Sujets $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Sujets $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Sujets::getAttributes(),"Sujets",["IdSujet" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Sujets::getAttributes(),"Sujets");
	}
}