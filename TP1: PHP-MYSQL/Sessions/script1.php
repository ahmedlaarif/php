<?php
// Démarrer la session
session_start();

// Définir une variable de session
$_SESSION['nom_utilisateur'] = 'Ali Zoubair';

// Afficher le contenu de la variable de session
echo 'Nom d\'utilisateur dans script1.php : ' . $_SESSION['nom_utilisateur'];
?>

