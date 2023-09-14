<?php
// Créer une classe pour se connecter à la base de donnée
class DbConnect
{
    private $host;
    private $dbName;
    private $userName;
    private $password;

    // Constructeur de la classe 
    public function __construct($hostDb, $dbNames, $userNameDb, $passwordDb)
    {
        $this->host = $hostDb;
        $this->dbName = $dbNames;
        $this->userName = $userNameDb;
        $this->password = $passwordDb;
    }

    public function dbConnect()
    {
        try { // Essaye de se connecter à la base de données

            $connexionDB = new PDO("mysql:host=$this->host;dbname=$this->dbName", "$this->userName", "$this->password"); // On récupère l'objet de connexion à la base de données dans la variable $connexionDB

        } catch (PDOException $error) { // Si la connexion echoue

            $connexionDB = $error; // On récupère notre erreur dans $connexionDb

        }
        return $connexionDB; // Retourne l'objet PDO (avec ou sans erreur)
    }
}

