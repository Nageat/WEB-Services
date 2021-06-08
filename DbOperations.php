  
<?php

include_once("Constantes.php"); 
include_once("DbConnect.php"); 
include_once("Client.php"); 

$method = $_SERVER['REQUEST_METHOD'];
f($method == "POST" && $_POST['METHOD'] == "create") 
{

    $ncli = $_POST['NCLI'];
    $nom = $_POST['NOM'];
    $adresse = $_POST['ADRESSE'];
    $localite = $_POST['LOCALITE'];
    $cat = $_POST['CAT'];
    $compte = $_POST['COMPTE'] ? $_POST['COMPTE'] : null;


    $sql = "INSERT INTO client VALUES ('" . $ncli . "','" . $nom . "','" . $adresse . "','" . $localite . "','" . $cat . "','" . $compte . "')";

    if ($connec_post->query($sql) == false)
    {
        var_dump("error" . mysqli_error($connec));
    }


    $connec_post->close();
}
?>