<?php
$id=$_POST['id'];

$uri = $authority."/agent/".$id;

$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$sexe=$_POST['sexe'];
$date_naissance=$_POST['date_naissance'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$direction=$_POST['direction'];
$departement=$_POST['departement'];
$fonction=$_POST['fonction'];
$password=$_POST['password'];
//$password=password_hash($_POST['password'], PASSWORD_DEFAULT);
$data = array(
    
    'firstName' => $prenom,
    'lastName' => $nom,
    'sexe' => $sexe,
    'dateNaissance' => $date_naissance,
    'telephone'=> $telephone,
	'email'=> $email,
	'password'=> $password,
    'direction'=> $direction,
    'departement'=> $departement,
    'fonction'=> $fonction
);
$result=curl_put($uri, $token, $data);

    $agents=json_decode($result);
    $code =  $agents->code;
    if($code ==200)
        {   
            $prenom =  $agents->prenom;
            $nom =  $agents->nom;
            $telephone =  $agents->telephone;
            $email =  $agents->email;
          
          
           
                //Intregration de l'IHM affichant la reponse positive
                require_once('composant/agent/modifier/ihm/reponse_positive.php'); 
            }
            else
            {
                echo  $clients;  
            }
    
    
    
?>