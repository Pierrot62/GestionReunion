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

	"ListeRolesApp"=>["PHP/VIEW/LISTE/","ListeRolesApp","Liste des roles d'application",0,false],
	"FormRolesApp"=>["PHP/VIEW/FORM/","FormRolesApp","Form des roles d'application",0,false],
	"ActionRolesApp"=>["PHP/CONTROLLER/ACTION/","ActionRolesApp","yarien",0,false],

	"ListeRolesApp"=>["PHP/VIEW/LISTE/","ListeRolesApp","Liste des roles d'application",0,false],
	"FormRolesApp"=>["PHP/VIEW/FORM/","FormRolesApp","Form des roles d'application",0,false],
	"ActionRolesApp"=>["PHP/CONTROLLER/ACTION/","ActionRolesApp","yarien",0,false],

	"ListeRolesApp"=>["PHP/VIEW/LISTE/","ListeRolesApp","Liste des roles d'application",0,false],
	"FormRolesApp"=>["PHP/VIEW/FORM/","FormRolesApp","Form des roles d'application",0,false],
	"ActionRolesApp"=>["PHP/CONTROLLER/ACTION/","ActionRolesApp","yarien",0,false],
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