<?php
require_once 'includes/ftc.inc.php';
function testMdp() {
}
$tests = [
    [ 'motdepasse123' => 'le mot de passe doit contenir un caractere special '],
    [ 'MotDePasse123' => 'le mot de passe doit contenir un caractere special '],
    [ 'abcdefghijklm' => 'le mot de passe doit contenir un caractere majuscule '],
    [ 'ABCDEFGHIJKLM' => 'le mot de passe doit contenir un caractere minuscule '],
    ['123456789012' => 'le mot de passe doit contenir un caractere minuscule '],
    [ 'tropcourt' => 'le mot de passe doit contenir au moins 12 caracteres'],

];

foreach ($tests as $mdp => $message ) {
    $resultat  = verifMdp($mdp);

    if ($resultat == $message) {
        echo "Test réussi pour le mot de passe : " ;
    } else {
        echo "Test échoué pour le mot de passe : "; 
    }
}
?>