<?php
$action = filter_input(INPUT_GET, 'action');
include 'vues/v_profile.php';
require_once 'includes/ftc.inc.php';

switch ($action) {
    case 'modifier':
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $nom = htmlspecialchars(trim($_POST['nom']));
            $prenom = htmlspecialchars(trim($_POST['prenom']));
            $email = htmlspecialchars(trim($_POST['email']));
            $id= $_SESSION['id_client'];

            $pdo->modifier($nom, $prenom, $email, $id);
            $_SESSION['nom_client']= $nom;
            $_SESSION['prenom_client']= $prenom;
            $_SESSION['mail_client']= $email;
    }else{
        echo "Methode non autorisée";
        }
        break;
}
?>