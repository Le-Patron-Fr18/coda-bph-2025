<?php
    $numbers = [28, 32, 44, -67, 18, 24, -98]; //variable tableau 
    
    function checkNumber($numbers) //fonction pour verifier les nombres   //
    {                                                                     //  je me suis aider de copilot pour faire la fonction
        if($numbers < 0) //condition négatif                              //  
        {                                                                 //  Voicie la demande : 
            echo $numbers . "négatif <br>"; //affichage "négatif"         //
        }                                                                 //  " je voudrait que tu corrige mon programme que en faisent une boucle de condition                                         
    }                                                                     //    pour qu'a la fin il apparait que les nombre négatif de la variable tableau "
    
    $i = 0; 

    while($i < count($numbers)) //parcours tableau avec boucle de condition
    {
        checkNumber($numbers[$i]); //appel fonction - affiche si négatif
        $i++; 
    }
?>