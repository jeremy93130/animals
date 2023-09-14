<?php
class CompteBancaire
{
    // Déclarer les propriétés normales :
    private $numero;
    private $nom;
    private $solde;
    // Déclarer une propriété statique :
    public static $nombreDeComptes = 0;
    // le constructeur 
    public function __construct($nom, $solde)
    {
        self::$nombreDeComptes++; // Pour un attribut statique self:: (Appartient à la classe elle même)
        $this->numero = "FR 76 00" . self::$nombreDeComptes;
        $this->solde = $solde;
        $this->nom = $nom;
    }

    // Créer un Geter qui permet de récuperer le numéro de compte : 
    public function getNumero()
    {
        return $this->numero . " est le numéro de compte de " . $this->nom;
    }

    public function deposer($depot)
    {
        $deposer = $this->solde += $depot;
        return "Le compte numéro " . $this->numero . " appartenant à " . $this->nom . " est maintenant à " . $deposer;
    }

    public function retirer($retrait)
    {
        $retirer = $this->solde -= $retrait;
        return "Le numéro de compte " . $this->numero . " appartenant à " . $this->nom . " est désormais à " . $retirer;
    }


    public function transferer($nDestinataire, $montant)
    {
        if ($this->solde >= $montant) {
            $this->solde -= $montant;

            $nDestinataire->deposer($montant);
            return "Transfer reussi";
        } else {
            return false;
        }

    }
    public function solde()
    {
        return " Le compte de " . $this->nom . " est à " . $this->solde;
    }
}

// Chaque compte bancaire est préfixé par cette chaine de caractère : FR 76 000X
// Créer un compte 

$compte1 = new CompteBancaire("Alin Mansita", 10);
$compte2 = new CompteBancaire("Cynthia", 20);

$compte1->transferer($compte2, 5);

$compte2->transferer($compte1, 25);

echo $compte2->solde();
echo $compte1->solde();



// Creer une methode deposer qui prend deux paramètres : $numerocompte et $montantàdeposer pour ajouter l'argent au compte
// Creer une methode retirer qui prend deux paramètres : $numerocompte et $montantàdeposer pour retirer l'argent du compte
// Creer une methode transferer qui prend deux paramètres : $compteDestinataire et $compteExpediteur et $montant , elle permet de transferer un montant d'un compte à un autre



// CORRECTION ABRAHAM:

/*
<?php
class CompteBancaire{
    // declarer les proprietes normales
    private $numero;
    private $nom;
    private $solde;
    // declarer une propriete statique
    public static $nombreDeCompte = 0;
    public static $listCompte = [];
    // le constructeur
    public function __construct($solde, $nom){
        // pour manipuler une propriete statique dans la classe on utilise le mot cle self suivi des "::"
        self::$nombreDeCompte++;
        $this->numero = "FR 76 00".self::$nombreDeCompte;
        $this->solde = $solde;
        $this->nom = $nom;
        array_push(self::$listCompte, $this);
    }

    // creer un geter qui permet de recuperer le numero de compte
    public function getNumero(){
        return $this->numero;
    }
    // 
    public function deposer($montant){
        $this->solde+=$montant;
    }
    // 
    public function retirer($montant){
        $this->solde-=$montant;
    }
    // 
    public function transferer($numero, $montant){
        foreach(self::$listCompte as $compte){
            if($compte->numero == $numero){
                $compte->solde+=$montant;
                $this->solde-=$montant;
                return;
            }
        }
    }

    public function getSolde(){
        return $this->solde;
    }


}
// chaque compte bancaire est prefixe par cette chaine de caractere "FR 76 00"
// creer un compte 
$compte1 = new CompteBancaire(10, "Alin Mansita");
// echo $compte1->getNumero()."<br>";
$compte2 = new CompteBancaire(100, "Wassila Boukedroun");
// echo $compte2->getNumero();
$compte2->transferer($compte1->getNumero(), 50);
echo $compte1->getSolde();

 */