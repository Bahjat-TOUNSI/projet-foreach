<?php
// UTILISER LA VARIABLE $song pour afficher les données
//  Pour les sauts de ligne merci d'utiliser la balise : <br>
// Le but de l'exercice est d'utiliser la commande foreach avec le moins de répétition du code possible
// Il existe plusieurs solutions pour afficher le résultat demandé

global $song;

echo $song ["title"] . "<br>";

foreach ($song as $keypart => $part) {

    // echo "<br>";
    if ($keypart === "data") {

        foreach ($part as $chorusORverse) {
            echo "<br>";


            foreach ($chorusORverse as $key => $line) {
                //var_dump($key);
                //var_dump($line);
                if ($key % 2 === 0) {
                    echo $line . "<br>";
                }

            }

        }
        echo "<br>";
    }

}
    echo $song ["author"];