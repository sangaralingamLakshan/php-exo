<?php
function quelleDate() {
    $jour = (int)date("d");
    $mois = (int)date("m");
    $annee = (int)date("Y");
    return sprintf("%02d/%02d/%04d", $jour, $mois, $annee);
}

echo quelleDate();

?>