<?php
include './libraryToInclude.php';

function getUtilisateursAutorises() {
    $utilisateurs = getAllUtilisateurs();
    $utilisateursAutorises = [];

    foreach ($utilisateurs as $utilisateur) {
       
        if (!$utilisateur->bloque && !empty($utilisateur->email) && $utilisateur->age >= 18) {
            $utilisateursAutorises[] = $utilisateur;
        }
    }

    return $utilisateursAutorises;
}


$utilisateursAutorises = getUtilisateursAutorises();
echo ($utilisateursAutorises);


?>