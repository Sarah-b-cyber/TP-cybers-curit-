<?php
include 'vues\v_connexion.php';
$action = filter_input(INPUT_GET, 'action');
require_once 'includes/ftc.inc.php';

switch ($action) {
    case 'login':
        $email = htmlspecialchars(trim($_POST['mail']));
        $mdp = htmlspecialchars(trim($_POST['mdp']));
        $info_client = $pdo->login($email);

        $mdpHash = $info_client['mdp'];

        if ($info_client) {
            $mdpHash = $info_client['mdp'];

                $_SESSION['nom_client'] = $info_client['nom'];
                $_SESSION['prenom_client'] = $info_client['prenom'];
                $_SESSION['role_client'] = $info_client['role'];
                $_SESSION['mail_client'] = $info_client['mail'];
                $_SESSION['id_client'] = $info_client['id'];

                echo 'Connecté avec succès';
                header("Refresh: 1; URL=index.php?uc=accueil");
                exit(); 
            } else {
                echo 'Mot de passe invalide';
        break;
    }   
}
?>
