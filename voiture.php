<?php
// Créer une classe Voiture avec les attributs suivants :
// couleur , marque , model 
// et les methodes suivantes :
// Rouler , accelerer , freiner , ralentir 

class Voiture
{
    public $couleur;
    public $marque;
    public $model;

    // Methodes :
    public function rouler()
    {
        echo 'Je roule dans ma ' . $this->marque . " de couleur " . $this->couleur . " modele " . $this->model . "<br>";
    }
    public function accelerer()
    {
        echo "J'accelère <br>";
    }
    public function ralentir()
    {
        echo 'Je ralenti <br>';
    }
    public function freiner()
    {
        echo 'Je freine <br>';
    }
}

// Créer une voiture de marque peugeot de modèle 308 et de couleur noire

// Pour la Methode rouler : afficher le texte "Je roule"
// Pour la Methode accelerer : afficher le texte "J'accelère"
// Pour la Methode freiner : afficher le texte "Je freine"
// Pour la Methode ralentir : afficher le texte "Je ralentis"
$mercedes = new Voiture();

$mercedes->couleur = "Noire";
$mercedes->marque = "benz";
$mercedes->model = "888";

$mercedes->rouler();
$mercedes->accelerer();
$mercedes->ralentir();
$mercedes->freiner();


// Class Voiture avec constructeur : 
class VoitureAvecConstructeur
{
    // attributs
    public $marque;
    public $modele;
    public $couleur;

    //Constructeur 
    public function __construct($brand, $model, $color)
    {
        $this->marque = $brand;
        $this->modele = $model;
        $this->couleur = $color;
    }
    // Methodes :
    public function rouler()
    {
        echo 'Je roule dans ma ' . $this->marque . " de couleur " . $this->couleur . " modele " . $this->modele . "<br>";
    }
    public function accelerer()
    {
        echo "J'accelère <br>";
    }
    public function ralentir()
    {
        echo 'Je ralenti <br>';
    }
    public function freiner()
    {
        echo 'Je freine <br>';
    }
}


// Créer une nouvelle voiture:
$voiture2 = new VoitureAvecConstructeur("Citroen", "C4", "Rouge");
$voiture2->rouler();



class Humain
{
    public $visage;
    public $corps;
    public $personnalite;

    public function __construct($head, $body, $personnality)
    {
        $this->visage = $head;
        $this->corps = $body;
        $this->personnalite = $personnality;
    }

    public function saluer()
    {
        echo "Je te salue et j'ai une énorme " . $this->visage . ", ainsi qu'un gros " . $this->corps . " mais une jolie " . $this->personnalite;
    }

}

$humain1 = new Humain("tête", "corps", "personnalité");
$humain1->saluer();