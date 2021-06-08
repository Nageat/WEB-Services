<?php 
include_once "Constantes.php";

 function ConnexionServ()
 {//Debut de connexion au serveur 
	            
    $dsn=SERVEUR.";dbname=".BASE;

    echo $dsn;
            
    try
    {
        $connexion=new PDO($dsn,USER,MDP);
        $connexion->exec("set names utf8");
        //Lancement de la connexion 
    }
            
            
    return $connexion;//Return  connexion 
}
function Disconect()
{
	$dsn = null;
}
 ?>