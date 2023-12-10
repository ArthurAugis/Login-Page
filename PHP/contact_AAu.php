<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Contact - Lion des Flandres</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Importation de Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../images/Lion_des_Flandres_AAu.png">


    <!--Importation du CSS-->
    <link href="../CSS/index_AAu.css" rel="stylesheet" type="text/css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Lion des Flandres</a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../index.php">Accueil</a></li>
                        <li><a href="login_AAu.php">Se connecter</a></li>
                        <li><a href="contact_AAu.php">Contact</a></li>
                        <li><a href="https://github.com/ArthurAugis/Page_de_Connexion" target="_blank">Github</a></li>
                    </ul>
                    <img src="../images/violon_AAu.png" id="violon">
                </div>
            </div>
        </div>
    </nav>
    <img src="../images/Lion_des_Flandres_AAu.png" id="logo">
    <div class="container">
        <form action="resultatcontact_AAu.php" method="post">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom..." required>

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom..." required>

            <label for="mail">Adresse Mail</label>
            <input type="email" id="mail" name="mail" placeholder="Votre email..." required>

            <label for="commentaires">Commentaires</label>
            <textarea id="commentaires" name="commentaires" placeholder="Vos commentaires..." required></textarea>

            <br> <br> <br>
            <input type="submit" value="Soumettre">
        </form>
    </div>
</body>
<footer>
    <br>
    Créer par Arthur Augis
    <br>
</footer>
</html>