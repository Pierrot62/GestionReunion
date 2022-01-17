<?php

class SujetsManager 
{

	public static function add(Sujets $obj)
	{
 		Services::add($obj);
	}

	public static function update(Sujets $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Sujets $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Sujets::getAttributes(),"Sujets",["IdSujet" => $id]);
	}

	public static function getList()
	{
 		Services::select(Sujets::getAttributes(),"Sujets");
	}
}