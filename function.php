<?php
// UTILISER LA VARIABLE $song pour afficher les données
//  Pour les sauts de ligne merci d'utiliser la balise : <br>
// Le but de l'exercice est d'utiliser la commande foreach avec le moins de répétition du code possible
// Il existe plusieurs solutions pour afficher le résultat demandé

global $song;

//var_dump($song);
foreach ($song as $key => $value){

    if($key === "title"){
        echo $value."<br>";
    }
    if($key === "refrain"){
        echo "<br>";
        foreach ($value as $lyrics){
            echo $lyrics."<br>";
        }
    }
    if($key === "author"){
        echo "<br>".$value;
    }
}