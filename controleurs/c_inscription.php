<?php

$action = filter_input(INPUT_GET, 'action');
include 'vues/v_inscription.php';
require_once 'includes/ftc.inc.php';

                
switch ($action) {
    case 'new_user':    
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $nom = htmlspecialchars(trim($_POST['nom']));
            // C'est une fonction qui permet de lutter contre les attaques de types xss
            // elle va convertir la valeur en chaine de caracteres
            //methode  non securise pour recuperer la saisie non securise
            //$nom= $_POST['nom'];
            $prenom = htmlspecialchars(trim($_POST['prenom']));
            $email = htmlspecialchars(trim($_POST['email']));
            $mdp = htmlspecialchars(trim($_POST['mdp']));


            $mdphash = password_hash($mdp, PASSWORD_DEFAULT);

            if (verifMdp($mdp)){
                $pdo->enregistrerClient($nom, $prenom, $email, $mdphash);
                echo 'Mot de passe enregistré avec succes';
                header("Refresh: 1; URL= index.php?uc=connexion");
            }else{
                echo (verifMdp($mdp));
            }

            /*
            if (!$pdo->emailExists($email)) {
                echo 'Cet email est déjà utilisé.';
                header("Refresh: 1; URL= index.php?uc=connexion");
            } else {
                $pdo->enregistrerClient($nom, $prenom, $email, $mdphash);
                echo 'Vous etes bien enregistres';
            }
                */

        }
        break;
    }
?>