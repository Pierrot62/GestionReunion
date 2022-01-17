<?php

class ReservationsManager 
{

	public static function add(Reservations $obj)
	{
 		Services::add($obj);
	}

	public static function update(Reservations $obj)
	{
 		Services::update($obj);
	}

	public static function delete(Reservations $obj)
	{
 		Services::delete($obj);
	}

	public static function findById($id)
	{
 		Services::select(Reservations::getAttributes(),"Reservations",["IdReservation" => $id]);
	}

	public static function getList()
	{
 		Services::select(Reservations::getAttributes(),"Reservations");
	}
}