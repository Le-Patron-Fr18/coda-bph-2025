<?php
    $animals = ["chat", "chien", "lapin", "souris"]; //variable tableau
    $i = 0; //variable compteur 

    while($i < count($animals)) //parcours tableau
    {
        echo " {$animals[$i]} <br>"; //affichage élément du tableau
        $i++; 
    }
?>