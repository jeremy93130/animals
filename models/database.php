<?php

require_once("../inc/fonction.php");
// creer la classe DbConnect permettant de se connecter a la base de donnees
class DbConnect {
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $database, $username, $password) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect() {
        $connexion = null;
        try {
            $connexion = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
        return $connexion;
    }
}
