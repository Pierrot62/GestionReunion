<?php

class ReservationsManager 
{

	public static function add(Reservations $obj)
	{
 		ClassServices::add($obj);
	}

	public static function update(Reservations $obj)
	{
 		ClassServices::update($obj);
	}

	public static function delete(Reservations $obj)
	{
 		ClassServices::delete($obj);
	}

	public static function findById($id)
	{
 		ClassServices::select(Reservations::getAttributes(),"Reservations",["IdReservation" => $id]);
	}

	public static function getList()
	{
 		ClassServices::select(Reservations::getAttributes(),"Reservations");
	}
}