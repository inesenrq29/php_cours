<?php
///exercice 7
function afficherAnnéeBissextile($annee){
    $msg = $annee . "est une année";
    if(!estBissextile($annee)){
        $msg .= " non";
    }
    $msg .= " bissextile";
    echo $msg;
}
function estBissextile($annee){
    return (($annee%4==0 && $annee%100!=0) || ($annee%400==0));
}

afficherAnnéeBissextile($annee); 
?>