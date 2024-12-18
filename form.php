<html lang="fr"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="static/css/styles.css">
    <link rel="stylesheet" href="static/css/font.css">
    <link rel="stylesheet" href="static/css/cursor_event.css">
    <link rel="stylesheet" href="static/css/navbar.css">
    <link rel="stylesheet" href="static/css/form_anwser.css">

    <title>Justice & Big Data | resultat du formulaire</title>
</head>
<body>

<nav id="navbar">
        <ul>
            <li class="left-box uppercase fw300 montserrat">
                <ul>
                    <li class="active-hidden-link">
                        <a class="underline-onhover" href="index.html">accueil</a>
                        <a class="underline-onhover hidden-link" href="developpement.html">developpement</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="poster-scientifique.html">poster scientifique</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="formulaire.html">formulaire</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="sources.html">sources</a>
                    </li>
                </ul>
            </li>
            <li class="right-box">
                <div class="menu-btn hover-cursor-event">
                    <div class="upper-layer"></div>
                    <div class="lower-layer"></div>
                </div>
            </li>
        </ul>
    </nav>

    <nav class="hidden-nav-menu">
        <ul class="hidden-navlist">
            <li class="uppercase fw300">
                <ul>
                    <li>
                        <a class="underline-onhover" href="index.html">accueil</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="developpement.html">developpement</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="poster-scientifique.html">poster scientifique</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="formulaire.html">formulaire</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="sources.html">sources</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <main id="main" class="montserrat">
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
            echo "<p><strong>Nom                        </strong> <span> $nom        </span></p>";
            echo "<p><strong>Prénom                     </strong> <span> $prenom     </span></p>";
            echo "<p><strong>Code Postal                </strong> <span> $codePostal </span></p>";
            echo "<p><strong>Email                      </strong> <span> $email      </span></p>";
            echo "<p><strong>Pays                       </strong> <span> $pays       </span></p>";
            echo "<p><strong>Sources                    </strong> <span> " . implode(", ", array_map('htmlspecialchars', $sources)) . "</span></p>";
            echo "<p><strong>Date de contact souhaitée  </strong> <span> $dateContact</span></p>";
            echo "<p><strong>Message                    </strong> <span> $message    </span></p>";
        } else {
            echo "<h1>Aucune donnée reçue</h1>";
            echo "<p>Veuillez soumettre le formulaire correctement.</p>";
        }
        ?>
    </main>

    <footer id="footer">
        <ul class="navlist">
            <li class="uppercase fw300">
                <ul>
                    <li>
                        <a class="underline-onhover" href="index.html">accueil</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="developpement.html">developpement</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="poster-scientifique.html">poster scientifique</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="formulaire.html">formulaire</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="sources.html">sources</a>
                    </li>
                </ul>
            </li>
            <li class="uppercase fw300">
                <ul>
                    <li>
                        <a class="underline-onhover" href="#">condition d'utilisateurs</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="#">politique de confidentialité</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="#">à propos</a>
                    </li>
                </ul>
            </li>
            <li class="uppercase fw300">
                <ul>
                    <li>
                        <a class="underline-onhover" href="#">faq</a>
                    </li>
                    <li>
                        <a class="underline-onhover" href="#">support</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="copyrights montserrat">
            <p>&copy; 2024 <a href="https://hchamrouk.com">hchamrouk.com</a>. Tous droits réservés.</p>
            <p>123 Rue de l'Informatique, 75001 Paris, France</p>
            <p>+33 1 23 45 67 89</p>
        </div>
    </footer>

    <script src="static/js/main.js"></script>

</body>
</html>