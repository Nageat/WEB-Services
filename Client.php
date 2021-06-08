<?php

include_once("Constantes.php");
include_once("DbOperations.php"); 
include_once("DbConnect.php"); 
include_once("Client.php"); 



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
}