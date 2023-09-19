<?php

    $uri =  $authority.'/process/';

    $result=curl_get($uri,$token);

    $obj = json_decode($result); 

    $code =  $obj->code;

    if($code ==200)
        {   
          
            $departements = $obj->departement;

            $directions= $obj->direction;

            $fonctions= $obj->fonction;

            $roles= $obj->role;

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/ajout/ihm/demande_creation.php'); 
           
        }


?>