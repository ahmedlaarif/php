<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérifier si le fichier a été correctement téléchargé
        if (isset($_FILES['fileInput']) && $_FILES['fileInput']['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES['fileInput'];

            // Vérifier l'extension du fichier
            $allowedExtensions = ['pdf'];
            $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
            if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
                echo("Veuillez sélectionner un fichier PDF.");
            }

            // Vérifier la taille du fichier (max 1 Mo)
            $maxSize = 1 * 1024 * 1024; // 1 Mo en octets
            if ($file['size'] > $maxSize) {
                echo("Le fichier ne doit pas dépasser 1 Mo.");
            }

            

            echo "Fichier envoyé avec succès !";
        } else {
            echo("Une erreur s'est produite lors du téléchargement du fichier.");
        }
    } else {
        echo("Méthode de requête non autorisée.");
    }
?>
