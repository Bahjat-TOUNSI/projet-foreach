<?php
// UTILISER LA VARIABLE $song pour afficher les données
//  Pour les sauts de ligne merci d'utiliser la balise : <br>
// Le but de l'exercice est d'utiliser la commande foreach avec le moins de répétition du code possible
// Il existe plusieurs solutions pour afficher le résultat demandé

global $song;



    foreach ($song as $keypart => $part) {
        if ($keypart === "title") {
            echo $part . "<br>";
        }
        if ($keypart === "data") {
            echo "<br>";
            foreach ($part as $key => $chorusORverse) {
                if ($key === "chorus_1") {
                    foreach ($chorusORverse as $lyrics) {
                        echo $lyrics . "<br>";
                    }
                }
                if ($key === "first_verse") {
                    foreach ($chorusORverse as $lyrics) {
                        echo $lyrics . "<br>";
                    }
                }
                if ($key === "chorus_2") {
                    foreach ($chorusORverse as $lyrics) {
                        echo $lyrics . "<br>";
                    }
                }
                if ($key === "second_verse") {
                    foreach ($chorusORverse as $lyrics) {
                        echo $lyrics . "<br>";
                    }
                }
                echo "<br>";
            }
        }
        if ($keypart === "author") {
            echo $part ;
        }
    }
