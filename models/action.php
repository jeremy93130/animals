<?php
session_start();
//Inclure le fichier utilisateur.php
require_once("./utilisateur.php");
require_once("./database.php");
//Récuperer les informations du formulaire
if (isset($_POST["submit"])) {
    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    $mdpHash = password_hash($password, PASSWORD_DEFAULT);

    $utilisateur = new Utilisateur($lastName, $firstName, $email, $mdpHash);
    $utilisateur->inscription();
}
// Créer une instance de la classe utilisateur
// Appeler la methode inscription pour enregistrer les données dans la base de donnée
