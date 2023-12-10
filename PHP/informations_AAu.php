<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Informations - Lion des Flandres</title>
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
    <div class="container" id="black">
    Version d'Apache : 
    <?php
        echo apache_get_version();
    ?>
    <br /> 
    Administrateur du serveur : 
    <?php
        echo $_SERVER['SERVER_ADMIN'];
    ?>
    <br /> 
    Hostname & Port : 
    <?php
        echo $_SERVER['HTTP_HOST'];
    ?>
    :
    <?php
        echo $_SERVER['SERVER_PORT'];
    ?>
    <br /> 
    Serveur Hôte : 
    <?php
        echo $_SERVER['SERVER_NAME'];
    ?>
    <br /> 
    Adresse IP du serveur : 
    <?php
        echo $_SERVER['SERVER_ADDR'];
    ?>
    <br /> 
    Port du serveur : 
    <?php
        echo $_SERVER['SERVER_PORT'];
    ?>
    <br /> 
    Port SMTP : Pas trouvé
    <br /> 
    Les bases de données : Pas encore trouvé
    <br /> 
    Connexion HTTP : Pas encore trouvé
    <br /> 
    Plateforme :
    <?php
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'Windows') !== false) {
            $os = 'Windows';
        } elseif (strpos($user_agent, 'Mac OS X') !== false) {
            $os = 'Mac OS X';
        } elseif (strpos($user_agent, 'Linux') !== false) {
            $os = 'Linux';
        } else {
            $os = 'Unknown';
        }
        echo $os;
    ?>
    <br /> 
    Navigateur : 
    <?php
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'Firefox') !== false) {
            $browser = 'Firefox';
        } elseif (strpos($user_agent, 'Chrome') !== false) {
            $browser = 'Chrome';
        } elseif (strpos($user_agent, 'Safari') !== false) {
            $browser = 'Safari';
        } elseif (strpos($user_agent, 'Opera') !== false) {
            $browser = 'Opera';
        } elseif (strpos($user_agent, 'MSIE') !== false) {
            $browser = 'Internet Explorer';
        } else {
            $browser = 'Unknown';
        }
        echo $browser;
    ?>
    <br /> 
    Langue : 
    <?php
        echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    ?>
    <br /> 
    Requête lancée pour atteindre la page : 
    <?php
        echo $_SERVER['REQUEST_URI'];
    ?>
    <br /> 
    </div>
</body>
<footer>
    <br>
    Créer par Arthur Augis
    <br>
</footer>
</html>