<?php
class Chat
{
    // Attributs
    private $nom;
    private $couleur;
    private $race;
    private $age;

    // Constructeur de la classe :
    public function __construct($noms, $couleurs, $races, $ages)
    {
        $this->nom = $noms;
        $this->couleur = $couleurs;
        $this->race = $races;
        $this->age = $ages;
    }

    // Créer le geter et le seter de la proprieté age :
    // le geter permet de récuperer la valeur de la propriété déclarée 'private' 
    public function getAge()
    {
        return $this->age;
    }

    // le Seter permet de modifier la valeur d'une proprieté déclarée en 'private'
    public function setAge($newAge)
    {
        $this->age = $newAge;
    }
}

// Créer un chat :
$chatSalem = new Chat("Salem", "noir", "europeen", 8);
$chatSierra = new Chat("Sierra", "Blanche", "europeen", 2);

echo $chatSalem->getAge(). "<br>";
$chatSalem->setAge(2) ;
echo $chatSalem->getAge();