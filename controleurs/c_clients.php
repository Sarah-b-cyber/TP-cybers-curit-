<?php
$action = filter_input(INPUT_GET, 'action');
$listClients= $pdo->clients();
include 'vues/v_clients.php';

switch ($action) {
    case 'sup_clients':
        $id = $_GET['id'];
        $pdo->supClients($id);
        echo 'Vous avez bien supprime le client';
    break;
    }
?>