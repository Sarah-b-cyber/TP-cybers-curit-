<?php


function verifMdp($mdp){
    $return = 'true';
    if(strlen($mdp) < 12){
        $return = 'le mot de passe doit contenir au moins 12 caracteres';
    }
    if(!preg_match('/[a-z]/',$mdp)){
        $return = 'le mot de passe doit contenir un caractere minuscule ';
    }
    if(!preg_match('/[A-Z]/',$mdp)){
        $return = 'le mot de passe doit contenir un caractere majuscule ';
    }
        if(!preg_match('/[\w]/',$mdp)){
        $return = 'le mot de passe doit contenir un caractere special ';      
    }
    return $return;
}
?>