<?php
require "connexion.php";

// On suppose que la connexion $db est déjà faite via un require 'connexion.php';

// 1. On vérifie que le formulaire a bien été soumis
// On vérifie que les champs existent et ne sont pas vides
if (
    isset($_POST['username']) && !empty($_POST['username']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['job']) && !empty($_POST['job'])
) {

    // 2. La requête SQL préparée
    // On utilise des marqueurs (:username, etc.) pour la sécurité
    $sql = "INSERT INTO users (username, email, job) VALUES (:username, :email, :job)";
    
    $query = $db->prepare($sql);

    // 3. Exécution avec les données du $_POST
    $success = $query->execute([
        ':username' => $_POST['username'],
        ':email'    => $_POST['email'],
        ':job'      => $_POST['job']
    ]);

    // 4. Redirection ou Message de succès
    if ($success) {
        // Une fois créé, on redirige l'utilisateur vers la liste (index.php)
        // Cela évite de renvoyer le formulaire si on actualise la page
        header('Location: index.php');
        exit; // Toujours mettre exit après une redirection header()
    } else {
        echo "Erreur lors de la création de l'utilisateur.";
    }

} else {
    // Optionnel : Message si le formulaire est incomplet
    // echo "Veuillez remplir tous les champs.";
}
?>