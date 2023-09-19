<?php

$id=$_GET['id'];

//URI
$uri = $authority."/agent/".$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $agents= $obj->agent;

    $code =  $obj->code;

    if($code ==200)
        {   
            $prenom=$agents[0]->prenom; 
            $nom=$agents[0]->nom;
            $sexe=$agents[0]->sexe;
            $date_naissance=$agents[0]->date_naissance;
            $email=$agents[0]->email;
            $telephone=$agents[0]->telephone;
            $direction=$agents[0]->direction;
            $direction_id=$agents[0]->direction_id;
            $departement=$agents[0]->departement;
            $departement_id=$agents[0]->departement_id;
            $fonction=$agents[0]->fonction;
            $fonction_id=$agents[0]->fonction_id;
           
            $id=$agents[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/modifier/ihm/demande_modification.php'); 
        }
        else
        {
            echo  $clients;  
        }




?>