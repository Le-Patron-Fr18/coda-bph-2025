<?php
   $users = [ // viariable tableau associatif 
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ],
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ]
    ];

    foreach($users as $user)  // Parcourt le tableau     //
    {                                                    //  aide de copilot pour faire la boucle 
        foreach($user as $key => $value)                 // 
        {                                                //  voici la demande :
            echo "$key : $value <br>";                   //
        }                                                // " pour la ligne 13 fait moi une ligne de commande
        echo "<br>";                                     //   pour parcourir le tableau sans aucune condition "
    }                                                    //      

?>