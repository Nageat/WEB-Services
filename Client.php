<?php

include_once("Constantes.php");
include_once("DbOperations.php"); 
include_once("DbConnect.php"); 


class Client
{
	private $_NCLI;
	private $_NOM;
	private $_ADRESSE;
	private $_LOCALITE;
	private $_CAT;
	private $_COMPTE;

	public function construct($ncli, $nom, $adresse, $localite, $cat, $compte) 
	{
    	$this->NCLI($ncli); 
    	$this->NOM($nom); 
    	$this->ADRESSE($adresse);
    	$this->LOCALITE($localite);
    	$this->CAT($cat);
    	$this->COMPTE($compte);
	}
    //Setter
	public function ADRESSE($adresse)
	{
    	$this->$_ADRESSE = $adresse;
	}
	public function NOM($nom)
	{
    	$this->$_NOM = $nom;
	}

	public function NCLI($ncli)
	{
    	$this->$_NCLI = $ncli;
	}

	public function LOCALITE($localite)
	{
    	$this->$_LOCALITE = $localite;
	}


	public function CAT($cat)
	{
    	$this->$_CAT = $cat;
	}


	public function COMPTE($compte)
	{
    	$this->$_COMPTE = $compte;
	}
}