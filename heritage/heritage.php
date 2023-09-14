<?php

// class Humain qui sera la classe mère de Magicien et de Patissier :
class Humain
{
    // Attributs communs aux classes filles
    protected $nom;
    protected $prenom;

    // Le constructeur
    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    // Methode commune aux classes filles
    public function dormir()
    {
        echo "je fais dodo";
    }
}

// Classe Magicien qui étend la classe Humain (Fille qui étend de sa Mère) du coup Magicien va hériter des attributs des proprietés et methodes de Humain:
class Magicien extends Humain
{
    public $baguette;

    public function __construct($nom, $prenom, $baguette) //On passe les paramètres du constructeur Mère aux Filles si besoin:
    {
        parent::__construct($nom, $prenom);
        $this->baguette = $baguette;
    }
    public function faireUnTourDeMagie()
    {
        echo "Voici un petit lapin sorti du chapeau grâce à " . $this->nom . " " . $this->prenom . " et " . $this->baguette . "<br>";
    }
}
// Classe Patissier
class Patissier extends Humain
{
    public $batteur = "electrique";

    // public function __construct($nom, $prenom, $batteur)
    // {
    //     parent::__construct($nom, $prenom);
    //     $this->batteur = $batteur;
    // }
    public function faireUnGateau()
    {
        echo 'Bonjour c"est ' . $this->nom. " ". $this->prenom . " j'ai un super  " . $this->batteur . " Miam voici un delicieux gateau";
    }
}
// Le constructeur (construct()) sert à éviter d'avoir à faire ça avec le nom ou autres :
// $humain = new Humain();
// $humain->$nom = "hkogjzijg";

// Instancier un magicien : 

$magicien = new Magicien("Julien", "le magicien", "la baguette de sureau");
echo $magicien->faireUnTourDeMagie();
$magicien = new Magicien("Ophelia", "la sorcière", "la baguette noire");
echo $magicien->faireUnTourDeMagie();

// Créer une patissiere :
$patissiere = new Patissier("Cherie", "Nawal");
echo $patissiere->faireUnGateau();

