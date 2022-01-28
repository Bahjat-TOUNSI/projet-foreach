<?php
// UTILISER LA VARIABLE $song pour afficher les données
//  Pour les sauts de ligne merci d'utiliser la balise : <br>
// Le but de l'exercice est d'utiliser la commande foreach avec le moins de répétition du code possible
// Il existe plusieurs solutions pour afficher le résultat demandé

global $song;


foreach ($song as $keypart => $part) {
    if ($keypart === "title") {
        echo "$part<br>";
    }
    if ($keypart === "data") {
        echo "<br>";
        foreach ($part as $key => $chorusORverse) {
            foreach ($chorusORverse as $lyrics) {
                print ($key) . " : ";
                echo $lyrics . "<br>";
            }
            echo "<br>";
        }
    }
    if ($keypart === "author") {
        echo $part ;
    }
}