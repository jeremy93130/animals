<?php
require_once("./database.php");
require_once("../inc/fonction.php");
require_once("./utilisateur.php");

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

    $utilisateur = new Utilisateur();
    $utilisateur->connexion($email,$mdp);
}