<?php

    $uri =  $authority.'/process/';

    $result=curl_get($uri,$token);

    $obj = json_decode($result); 

    $code =  $obj->code;

    if($code ==200)
        {   
          
            $textes = $obj->text;

               
            
            require_once('composant/modele/ajout_un/view/demande_ajout.php'); 
           
        }

  
?>