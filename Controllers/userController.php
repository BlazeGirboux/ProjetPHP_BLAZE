<?php   // code php qui décide de ce qu'il faut donner comme valeur à la variable $template

require_once ("Models/userModel.php"); 
// on ajoutera par la suite les require aux modèles

// récupération du chemin désiré
$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/connexion") {
    
    if(isset($_POST['btnEnvoi'])){
        $erreur=false;
        if(connectUser($pdo)){
            header("location:/");
        }
        else{
            $erreur=true;
        }
    }
    $title = "Connexion";                  //titre à afficher dans l'onglet de la page du navigateur
    $template = "Views/Users/connexion.php";        //chemin vers la vue demandée
    require_once("Views/base.php");             //appel de la page de base qui sera remplie avec la vue demandée
}


elseif ($uri ==="/inscription") {
             if(isset($_POST['btnEnvoi'])) {
             createUser($pdo);
           header('location:/connexion');
 
             }
             //appel de la page de base qui sera remplie avec la vue demandée
$title = "Inscription";                  //titre à afficher dans l'onglet de la page du navigateur
$template = "Views/Users/inscriptionOrEditProfil.php";        //chemin vers la vue demandée
require_once("Views/base.php");   
        }

elseif ($uri ==="/inscription") {
        if(isset($_POST['btnEnvoi'])) {
            $messageError = verifEmptyData();
        
            if(!$messageError){
                createUser($pdo);
                header('location:/connexion');
                }
            }
        }

elseif ($uri ==="/profil") {
    
    $title = "Mise à jour du profil";
    $template = "Views/Users/inscriptionOrEditProfile.php";
    require_once("Views/base.php");
}
 
elseif ($uri === "/deconnexion") {
    session_destroy();
    header("location:/");
}

function verifEmptyData()
{
    foreach ($_POST as $key => $value) {
        if (empty(str_replace(' ', '', $value))){
            $messageError[$key] = "Votre " . $key . " est vide.";
        }
    }
    if (isset($messageError)) {
        return $messageError;
    
    } else {
        return false;
    }
}

