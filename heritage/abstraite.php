<?php

abstract class Person
{
    public $nom;
    public $prenom;
    public function courir()
    {
    }
    public function manger()
    {
    }
    public function bouger()
    {
    }
    public function danser()
    {
        echo 'je sais danser la salsa et tango';
    }

    // Nouvelle methode:
    public function pleurer()
    {
    }
}

class Mecano extends Person
{

}

class Pilote extends Person
{

}