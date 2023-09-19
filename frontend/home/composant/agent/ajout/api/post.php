
<?php
$uri =  $authority.'/agent/';
//Recuperer les variables POST
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$sexe=$_POST['sexe'];
$date_naissance=$_POST['date_naissance'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$direction=$_POST['direction'];
$departement=$_POST['departement'];
$fonction=$_POST['fonction'];
$role=$_POST['role'];
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
    'fonction'=> $fonction,
    'role'=> $role
);
$result=curl_post($uri, $token, $data);
$agent=json_decode($result);

$code =  $agent->code;
    
if($code ==201)
        {   
            $prenom =  $agent->prenom;
            $nom =  $agent->nom;
            $telephone =  $agent->telephone;
            $email =  $agent->email;
            $direction =  $agent->direction;
            $departement =  $agent->departement;
            $fonction =  $agent->fonction;
            //$password=  $agent->password;
            $role =  $agent->role;
            $id =  $agent->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/ajout/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/agent/ajout/ihm/reponse_negative.php');   
        }


?>