<?php

include "./PHP/CONTROLLER/Outils.php";

spl_autoload_register("ChargerClasse");

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']) && TexteManager::checkIfLangExist($_GET['lang'])) {
	 // tester si la langue est gérée
	$_SESSION['lang'] = $_GET['lang'];
}else if (isset($_COOKIE['lang'])) {
	$_SESSION['lang'] = $_COOKIE['lang'];
}else{
	$_SESSION['lang'] = 'FR';
}
//Crée un cookie lang sur la machine de l'utilisateur d'une durée de 10h.
setcookie("lang", $_SESSION['lang'], time()+36000, '/');
/******Fin des langues******/

$routes=[
	"default"=>["PHP/VIEW/GENERAL/","accueil","Accueil",0,false],

	"ListeRolesApp"=>["PHP/VIEW/LISTE/","ListeRolesApp","Liste des roles d'application",0,false],
	"FormRolesApp"=>["PHP/VIEW/FORM/","FormRolesApp","Form des roles d'application",0,false],
	"ActionRolesApp"=>["PHP/CONTROLLER/ACTION/","ActionRolesApp","yarien",0,false],

	"ListeOrganisations"=>["PHP/VIEW/LISTE/","ListeOrganisations","Liste des organisations",0,false],
	"FormOrganisations"=>["PHP/VIEW/FORM/","FormOrganisations","Form des organisations",0,false],
	"ActionOrganisations"=>["PHP/CONTROLLER/ACTION/","ActionOrganisations","yarien",0,false],

	"ListeReunions"=>["PHP/VIEW/LISTE/","ListeReunions","Liste des reunions",0,false],
	"FormReunions"=>["PHP/VIEW/FORM/","FormReunions","Form des reunions",0,false],
	"ActionReunions"=>["PHP/CONTROLLER/ACTION/","ActionReunions","yarien",0,false],

	"ListeRolesReunion"=>["PHP/VIEW/LISTE/","ListeRolesReunion","Liste des roles d'application",0,false],
	"FormRolesReunion"=>["PHP/VIEW/FORM/","FormRolesReunion","Form des roles d'application",0,false],
	"ActionRolesReunion"=>["PHP/CONTROLLER/ACTION/","ActionRolesReunion","yarien",0,false],

	"ListeFichiersReunion"=>["PHP/VIEW/LISTE/","ListeFichiersReunion","Liste des fichiers de réunion",0,false],
	"FormFichiersReunion"=>["PHP/VIEW/FORM/","FormFichiersReunion","Form des fichiers de réunion",0,false],
	"ActionFichiersReunion"=>["PHP/CONTROLLER/ACTION/","ActionFichiersReunion","yarien",0,false],

	"ListeSondages"=>["PHP/VIEW/LISTE/","ListeSondages","Liste des roles d'application",0,false],
	"FormSondages"=>["PHP/VIEW/FORM/","FormSondages","Form des roles d'application",0,false],
	"ActionSondages"=>["PHP/CONTROLLER/ACTION/","ActionSondages","yarien",0,false],

	"ListeServices"=>["PHP/VIEW/LISTE/","ListeServices","Liste des services",0,false],
	"FormServices"=>["PHP/VIEW/FORM/","FormServices","Form des services",0,false],
	"ActionServices"=>["PHP/CONTROLLER/ACTION/","ActionServices","yarien",0,false],

	"ListeSallesReunion"=>["PHP/VIEW/LISTE/","ListeSallesReunion","Liste des salles de reunion",0,false],
	"FormSallesReunion"=>["PHP/VIEW/FORM/","FormSallesReunion","Form des salles de reunion",0,false],
	"ActionSallesReunion"=>["PHP/CONTROLLER/ACTION/","ActionSallesReunion","yarien",0,false],

	"ListeUsers"=>["PHP/VIEW/LISTE/","ListeUsers","Liste des utilisateurs",0,false],
	"FormUsers"=>["PHP/VIEW/FORM/","FormUsers","Form des utilisateurs",0,false],
	"ActionUsers"=>["PHP/CONTROLLER/ACTION/","ActionUsers","yarien",0,false],
	
	"ListeSujets"=>["PHP/VIEW/LISTE/","ListeSujets","Liste des sujets",0,false],
	"FormSujets"=>["PHP/VIEW/FORM/","FormSujets","Form des sujets",0,false],
	"ActionSujets"=>["PHP/CONTROLLER/ACTION/","ActionSujets","yarien",0,false],

	"ListeActions"=>["PHP/VIEW/LISTE/","ListeActions","Liste des actions",0,false],
	"FormActions"=>["PHP/VIEW/FORM/","FormActions","Form des actions",0,false],
	"ActionActions"=>["PHP/CONTROLLER/ACTION/","ActionActions","yarien",0,false],

	"ListeAffectationsUser"=>["PHP/VIEW/LISTE/","ListeAffectationsUser","Liste des  affectations user",0,false],
	"FormAffectationsUser"=>["PHP/VIEW/FORM/","FormAffectationsUser","Form des  affectations user",0,false],
	"ActionAffectationsUser"=>["PHP/CONTROLLER/ACTION/","ActionAffectationsUser","yarien",0,false],

	"ListeParticipations"=>["PHP/VIEW/LISTE/","ListeParticipations","Liste des Participations",0,false],
	"FormParticipations"=>["PHP/VIEW/FORM/","FormParticipations","Form des Participations",0,false],
	"ActionParticipations"=>["PHP/CONTROLLER/ACTION/","ActionParticipations","yarien",0,false],

	"ListeReservations"=>["PHP/VIEW/LISTE/","ListeReservations","Liste des Reservations",0,false],
	"FormReservations"=>["PHP/VIEW/FORM/","FormReservations","Form des Reservations",0,false],
	"ActionReservations"=>["PHP/CONTROLLER/ACTION/","ActionReservations","yarien",0,false],

	"ListePays"=>["PHP/VIEW/LISTE/","ListePays","Liste des Pays",0,false],
	"FormPays"=>["PHP/VIEW/FORM/","FormPays","Form des Pays",0,false],
	"ActionPays"=>["PHP/CONTROLLER/ACTION/","ActionPays","yarien",0,false],
	
	"ListeVilles"=>["PHP/VIEW/LISTE/","ListeVilles","Liste des Villes",0,false],
	"FormVilles"=>["PHP/VIEW/FORM/","FormVilles","Form des Villes",0,false],
	"ActionVilles"=>["PHP/CONTROLLER/ACTION/","ActionVilles","yarien",0,false],
];

if(isset($_GET["page"]))
{

	$page=$_GET["page"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["default"]);
	}
}
else
{
	AfficherPage($routes["default"]);
}