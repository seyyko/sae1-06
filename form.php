<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justice & Big Data | resultat du formulaire</title>
</head>
<body>

<?php
// Vérifie si le formulaire a été soumis (GET ou POST)
if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    // Détermine la méthode utilisée
    $data = $_SERVER["REQUEST_METHOD"] == "POST" ? $_POST : $_GET;

    // Récupération des données du formulaire
    $nom = htmlspecialchars($data['nom'] ?? '');
    $prenom = htmlspecialchars($data['prenom'] ?? '');
    $codePostal = htmlspecialchars($data['code_postal'] ?? '');
    $email = htmlspecialchars($data['email'] ?? '');
    $pays = htmlspecialchars($data['pays'] ?? '');
    $sources = $data['source'] ?? []; // Tableau pour les sources (checkboxes)
    $dateContact = htmlspecialchars($data['date_contact'] ?? '');
    $message = htmlspecialchars($data['message'] ?? '');

    // Affichage des données
    echo "<h1>Récapitulatif des informations reçues</h1>";
    echo "<p><strong>Nom :</strong> $nom</p>";
    echo "<p><strong>Prénom :</strong> $prenom</p>";
    echo "<p><strong>Code Postal :</strong> $codePostal</p>";
    echo "<p><strong>Email :</strong> $email</p>";
    echo "<p><strong>Pays :</strong> $pays</p>";
    echo "<p><strong>Sources :</strong> " . implode(", ", array_map('htmlspecialchars', $sources)) . "</p>";
    echo "<p><strong>Date de contact souhaitée :</strong> $dateContact</p>";
    echo "<p><strong>Message :</strong> $message</p>";
} else {
    echo "<h1>Aucune donnée reçue</h1>";
    echo "<p>Veuillez soumettre le formulaire correctement.</p>";
}
?>

</body>
</html>