<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/php_objet/models/database.php';

// Créer une classe utilisateur avec les proprietés:
// Nom,prenom,email,mot de passe
// Methodes : s'inscrire , se connecter , se deconnecter,
class Utilisateur
{
    private $nom;
    private $prenom;
    private $email;
    private $mdp;

    public function __construct($nom = null, $prenom = null, $email = null, $mdp = null)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
    }

    public function inscription()
    {

        $dbConnexion = new DbConnect("localhost", "cours_db", "root", "");
        // Connecter à la base de données:
        $db = $dbConnexion->dbConnect();

        // Préparer la requête :
        $request = $db->prepare('INSERT INTO utilisateurs (nom,email,mdp,prenom) VALUES (?,?,?,?)');
        try {
            $request->execute(array($this->nom, $this->email, $this->mdp, $this->prenom));
        } catch (PDOException $error) {
            $error->getMessage();
        }

    }

    public static function connexion($email, $mdp)
    {
        $dbConnexion = new DbConnect("localhost", "cours_db", "root", "");

        $db = $dbConnexion->dbConnect();
        // Préparer la requête :
        $request = $db->prepare('SELECT * FROM utilisateurs WHERE email = ?');

        try {
            $request->execute(array($email));
            $user = $request->fetch(PDO::FETCH_ASSOC);
            if (empty($user)) { // Si $user est vide
                echo "Utilisateur inconnu";
            } else {
                if (password_verify($mdp, $user["mdp"])) {
                    $_SESSION['prenom'] = $user["prenom"];
                    header("Location: ../user_page.php");
                } else {
                    echo "mauvais mdp petit malin";
                }
            }
        } catch (PDOException $error) {
            $error->getMessage();
        }
        return $user;
    }
}