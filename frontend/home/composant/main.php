<?php 
    //Authority for URI
    $authority="http://api.eliajimmy.net";

    //Import module Curl
    require_once('composant/curl.php'); 

    if (isSet($_GET['demande']))
        {
            $demande=$_GET['demande'];

            if($demande=='ajouter_photo_agent')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/importer_photo/api/post_image.php'); 
                }
            else if($demande=='importer_agents')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/importer_excel/api/import.php'); 
                }
              


            else if($demande=='ajouter_photo_agent')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/importer_photo/api/post_image.php'); 
                }

        }
    else if (isSet($_GET['page']))
        {
            $page=$_GET['page'];

           
             if($page=='ajouter_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/ajout/api/get_parametres.php');

                   // require_once('composant/agent/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_agents')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/get_ressources.php'); 
                }

             else  if($page=='modifier_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/get_ressource.php'); 
                }
      
            else  if($page=='supprimer_agents')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/get_ressources.php'); 
                }

            else  if($page=='supprimer_agent')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/get_ressource.php'); 
                }
           
            else  if($page=='recuperer_agents')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/recuperer/api/get_ressources.php'); 
                }
            
            else  if($page=='recuperer_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/recuperer/api/get_ressource.php'); 
                }

            else  if($page=='importer_agents')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/importer_excel/ihm/demande_importation.php'); 
                }


            
    



          //MENU LINAFOOT APPLICATION
   
        }
    else   
        {
            //Composant2 : formuler la demande
            require_once('composant/dashboard/ihm/index.php'); 
        }
      
      
?>