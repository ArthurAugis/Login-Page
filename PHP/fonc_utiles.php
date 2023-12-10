<?php
require_once('bdd_connexion.php');

function connexion()
{
    try {
        $connexion = new PDO('mysql:host=' . SERVEUR . ';dbname=' . BDD, USER, PWD);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;
    } catch (PDOException $e) {
        echo "Problème de connexion Bdd : " . $e->getMessage() . "<br/>";
        exit();
    }
}

function deconnexion($connexion)
{
    $connexion = NULL;
}

function EmailUse($connexion, $mail, $identifiant, $mdp)
{
    $sql = "SELECT * FROM connexion_users WHERE mail LIKE :mail";
    $stmt = $connexion->prepare($sql);
    $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return GoodLogin($connexion, $mail, $identifiant, $mdp);
    }
    else {
        return Inscription($connexion, $mail, $identifiant, $mdp);
    }
}

function GoodLogin($connexion, $mail, $identifiant, $mdp)
{
    $sql = "SELECT id FROM connexion_users WHERE mail LIKE :mail AND identifiant LIKE :identifiant AND mdp LIKE :mdp";
    $stmt = $connexion->prepare($sql);
    $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
    $stmt->bindParam(':identifiant', $identifiant, PDO::PARAM_STR);
    $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['id'];
    }
    else {
        return false;
    }
}

function Inscription($connexion, $mail, $identifiant, $mdp)
{
    $sql = "INSERT INTO `connexion_users` (`id`, `mail`, `identifiant`, `mdp`, `token`) VALUES (NULL, :mail, :identifiant, :mdp, NULL);";
    $stmt = $connexion->prepare($sql);
    $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
    $stmt->bindParam(':identifiant', $identifiant, PDO::PARAM_STR);
    $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() == 0) {
        return $connexion->lastInsertId();
    }
    else {
        return false;
    }
}

function SetToken($connexion, $mail, $token)
{
    $sql = "UPDATE connexion_users SET token = :token WHERE mail LIKE :mail;";
    $stmt = $connexion->prepare($sql);
    $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
    $stmt->bindParam(':token', $token, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() == 0) {
        return $connexion->lastInsertId();
    }
    else {
        return false;
    }
}

function ChangePassword($connexion, $token, $password)
{
    $sql = "UPDATE connexion_users SET token = NULL, mdp = :mdp  WHERE token LIKE :token;";
    $stmt = $connexion->prepare($sql);
    $stmt->bindParam(':mdp', $password, PDO::PARAM_STR);
    $stmt->bindParam(':token', $token, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() == 0) {
        return $connexion->lastInsertId();
    }
    else {
        return false;
    }
}

function HasAccount($connexion, $mail)
{
    $sql = "SELECT * FROM connexion_users WHERE mail LIKE :mail";
    $stmt = $connexion->prepare($sql);
    $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return true;
    }
    else {
        return false;
    }
}