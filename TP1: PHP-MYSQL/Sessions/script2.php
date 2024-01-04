<?php
// Démarrer la session
session_start();

// Modifier la variable de session
$_SESSION['nom_utilisateur'] = 'Zoubair Ali';

// Afficher le contenu de la variable de session
echo 'Nom d\'utilisateur dans script2.php : ' . $_SESSION['nom_utilisateur'];
?>

