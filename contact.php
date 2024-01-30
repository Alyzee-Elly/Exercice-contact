<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--affichage par rapport à la taille de l'écran-->
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
        <title>Balise qui s'affiche en haut dans le navigateur</title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Open+Sans:wght@300&display=swap" rel="stylesheet">


    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <!--11 lignes header et footer inclus-->
        <!--emmet: section*9+TAB-->
        <header>
            <?php
                //connexion à la bdd
                    $servername = "localhost";
                    $username = "root";
                    $password = "root";
                    $dbname = "contact_artisans";

                // Créer une connexion à la base de données
                    $conn = new mysqli("localhost", "root", "root", "contact_artisans");

                // Vérifier la connexion
                    if ($conn->connect_error) {
                        die("Echec de la connexion: " . $conn->connect_error);
                    }



                //Récupérer les données du formulaire de contact
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                // Préparer et exécuter la requête SQL pour insérer les données
                $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

                if ($conn->query($sql) === TRUE) {
                    echo "Votre message a été envoyé avec succès.";

                } else {
                    echo "Une erreur s'est produite lors de l'envoi de votre message: " . $conn->error;
                }
                
// Fermer la connexion à la base de données
$conn->close();
            
            ?>
            <nav class="navbar navbar-expand-md fixed-top">
                <div class="container">
                    <!--marque+item-->
                    <a href="index.html">
                        <h4>ARTISANS</h4>
                    </a>
                    <!--bouton-->
                    <button class="navbar-toggler" type="botton" data-bs-toggle="collapse" data-bs-toggle="#navSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--menu-->
                    <div id="navSupportedContent" class="collapse navbar-collapse">                       
                    <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link active">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html"class="nav-link">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html"class="nav-link">Contact</a>
                    </li>
                </ul>
                <form role="search">
                    <input type="search" placeholder="Mots clés" class="">
                    <button type="submit" class="btn btn-outline-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                </button>
                </form>
                </div>
            </nav>
            <!--icone recherche-->
            </header>

        <main class="container-fluid">
            <section class="row bg-dark text-light overlay align-items-center mask1" id="presentation-about"> 
                <h1 class="text-center">A propos de nous</h1></section>

                <section class="row">
                    <div class="col-md-4 offset-md-2 text-center">
                    <img src="images/interior-with-antuques-small.jpg" class="img-fluid rounded-top-pill vignette"></div>
                    <div class="col-md-4">
                        <h2>Parlons de vous</h2>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    
                    <form action="" method="POST">
                        <div class="mb-3">
                        <input type="text" name="name"
                        placeholder="Votre nom" required class="form-control">
                        </div>
                        <div class="mb-3">
                        <input type="email" name="email"
                        placeholder="Votre email" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea placeholder="Votre message"
                        name="message" class="form-control"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Envoyer" class="btn btn-primary form-control">
                    </div>
                      </form>
                    </div>
                    </section>
                    <section class="row">
                        <div class="col-md-3 offset-md-2">
                            <h5>Nos offres</h5>
                        <h4>Titre</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, repellat, magnam nulla recusandae dignissimos nisi vitae odit numquam deserunt ullam error quis nostrum id delectus est quam quae inventore animi.</p>
                        </div>

                        <div class="col-md-3">
                            <h4>Nos coordonnées</h4>
                            <p>254 Waltz Witman Road Brooklyn</p>
                            <p>rue</p>
                            <p>ville</p>
                            <p>31000</p>
                        </div>

                        <div class="col-md-3">
                            <h5>Informations</h5>
                            <p>Adresse</p>
                            <p>Telephone</p>
                            <p>Mail</p>
                        </div>
                        
                    </section>

                            












</main>
                <footer>
                    <p>Copyrigth 2023 Formation31- Mentions légales</p>
                </footer>
        
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
            </body>
        </html>
        
        
        