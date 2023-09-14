<?php

/** Créer une classe abstraite FormGeometrique
 * avec les attributs suivants : 
 * 1 - Surface
 * 2 - Perimetre
 * 
 * Créer la classe Rectangle fille de FormeGeometrique avec les attributs suivants :
 * 1 - Longueur
 * 2 - Largeur
 * Et la methode calculerSurface() et calculerPerimetre()
 * 
 * Créer la classe Cercle fille de FormeGeometrique avec les propriétés suivantes :
 * 1 - Rayon 
 * Et la methode calculerSurface() et calculerPerimetre()

*/

abstract class FormeGeometrique
{
    protected $surface;
    protected $perimetre;

    public function __construct($surface, $perimetre)
    {
        $this->surface = $surface;
        $this->perimetre = $perimetre;
    }
}

class Rectangle extends FormeGeometrique
{
    private $longueur;
    private $largeur;

    public function __construct($surface, $perimetre, $longueur, $largeur)
    {
        parent::__construct($surface, $perimetre);
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // Methode calculerSurface:
    public function calculerSurface()
    {
        return $this->surface = $this->longueur * $this->largeur;

    }

    // Methode calculerPerimetre:
    public function calculerPerimetre()
    {
        return $this->perimetre = ($this->longueur + $this->largeur) * 2;
    }
}

class Cercle extends FormeGeometrique
{
    private $rayon;

    public function __construct($rayon, $surface, $perimetre)
    {
        $this->rayon = $rayon;
        parent::__construct($surface, $perimetre);
    }


    public function calculerSurface()
    {
        return $this->surface = M_PI * pow($this->rayon, 2);
    }

    // Methode calculerPerimetre:
    public function calculerPerimetre()
    {
        return $this->perimetre = 2 * pi() * $this->rayon;
    }
}

// Créer un rectangle avec une longueur de 10 et une largeur de 4 perimetre et surface 0
$rectangle1 = new Rectangle(0, 0, 10, 4);
echo $rectangle1->calculerPerimetre();