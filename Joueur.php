<?php 

abstract class Joueur
{
    public function seConnecter(){
        return $this->EtreMajeur();
    }

    abstract public function EtreMajeur();
    abstract public function Devise();
}

class JoueurFr extends Joueur
{
    public function EtreMajeur()
    {
        return 18;
    }

    public function Devise(){
        return "€";
    }
}

class JoueurUs extends Joueur
{
    public function EtreMajeur()
    {
        return 21;
    }

    public function Devise()
    {
        return "$";
    }
}

// $joueur = new Joueur();


$joueurFr = new JoueurFr();

echo $joueurFr->seConnecter()."\n";

$joueurUs = new JoueurUs();
echo $joueurUs->seConnecter()."\n";
