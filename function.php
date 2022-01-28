<?php
// UTILISER LA VARIABLE $song pour afficher les données
//  Pour les sauts de ligne merci d'utiliser la balise : <br>
// Le but de l'exercice est d'utiliser la commande foreach avec le moins de répétition du code possible
// Il existe plusieurs solutions pour afficher le résultat demandé

global $song;


foreach ($song as $keypart => $part) {
    if ($keypart === "title" || $keypart === "author") {
        echo $part;
    }
    if ($keypart === "data") {
        foreach ($part as $key => $chorusORverse) {
           echo "<br>";
           // echo [0];
            //echo "<br><br>";
            if ($key === "verse"){
                foreach ($chorusORverse as $verse ){
                    foreach ( $song["data"]["chorus"]["chorus_1"] as $chorusLyrics) {
                        echo $chorusLyrics . "<br>";
                    }
                    echo "<br>";
                    foreach ($verse as $lyrics){
                        echo ($lyrics)."<br>";
                    }
                    echo "<br>";
                }
            }
        }
    }
}

