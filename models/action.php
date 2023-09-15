<?php
session_start();
//Inclure le fichier utilisateur.php
require_once("./utilisateur.php");
require_once('../inc/fonction.php');
//Récuperer les informations du formulaire
if (isset($_POST["submit"])) {
    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    $mdpHash = password_hash($password, PASSWORD_DEFAULT);

    // Créer une instance de la classe utilisateur
// Appeler la methode inscription pour enregistrer les données dans la base de donnée

    $utilisateur = new Utilisateur($lastName, $firstName, $email, $mdpHash);
    $utilisateur->inscription();
}




require_once("./AnimalRepository.php");

if (isset($_POST["submitAnimal"])) {
    // Récupération des données saisies par l'utilisateur dans le formulaire:
    $name = htmlspecialchars($_POST["name"]);
    $type = htmlspecialchars($_POST["type"]);
    $breed = htmlspecialchars($_POST["breed"]);

    // on appelle le constructeur
    
    $animal = new AnimalRepository($name, $type, $breed);
    $animal->insert();
    // debugDie($type);
    
}