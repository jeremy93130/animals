<?php 
require_once("./database.php");
require_once("../inc/fonction.php");

class AnimalRepository
{
    private $id_animal;
    private $name;
    private $type;
    private $breed;

    public function __construct($name, $type, $breed)
    {
        $this->name = $name;
        $this->type = $type;
        $this->breed = $breed;
    }

    public function insert()
    {
        // Connexion à la base de données :
        $sb = new DbConnect("localhost", "pet_shop", "root", "");
        $db_connect = $sb->connect();
        
        // Préparation de la requête à la bdd : 
        $request = $db_connect->prepare("INSERT INTO animal (name,type,breed) VALUES(?,?,?)");

        // Executer la requête : 
        try {
            $request->execute(array($this->name, $this->type, $this->breed));
        } catch (PDOException $error) {
            $error->getMessage();
        }
    }
}