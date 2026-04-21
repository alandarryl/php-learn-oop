<?php 

interface MoteurInterface
{
    public function demarrer(): string;
}

class MoteurEssence implements MoteurInterface
{
    public function demarrer(): string
    {
        return "Moteur essence : Vroom ";
    }
}

class MoteurElectrique implements MoteurInterface
{
    public function demarrer(): string
    {
        return "Moteur électrique : zzz";
    }
}

class MoteurFake implements MoteurInterface
{
    public function demarrer(): string
    {
        return "TEST";
    }
}

class Voiture5
{
    private MoteurInterface $moteur;

    public function __construct(MoteurInterface $moteur)
    {
        $this->moteur = $moteur;
    }

    public function demarrer(): string{
        return $this->moteur->demarrer();
    }
}

$vehicule1 = new Voiture5(moteur: new MoteurEssence());
echo $vehicule1->demarrer();
echo "\n";
$vehicule2 = new Voiture5(moteur: new MoteurElectrique());
echo $vehicule2->demarrer();
echo "\n";
$vehicule3 = new Voiture5(moteur: new MoteurFake());
echo $vehicule3->demarrer();


