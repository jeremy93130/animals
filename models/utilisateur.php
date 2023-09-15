<?php
require_once("./database.php");

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

        // Connecter à la base de données:
        $db = new DbConnect("localhost", "pet_shop", "root", "");
        $data = $db->connect();

        // Préparer la requête :
        $request = $data->prepare('INSERT INTO utilisateur (nom,email,mdp,prenom) VALUES (?,?,?,?)');
        try {
            $request->execute(array($this->nom, $this->email, $this->mdp, $this->prenom));
        } catch (PDOException $error) {
            $error->getMessage();
        }

    }

    public static function connexion($email, $mdp)
    {
        $db = new DbConnect("localhost", "pet_shop", "root", "");
        $data = $db->connect();
        // Préparer la requête :
        $request = $data->prepare('SELECT * FROM utilisateur WHERE email = ?');

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