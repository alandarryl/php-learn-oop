<?php

class Voiture2{
    public string $marque;
    public int $vitesse = 0;

    public function __construct(string $marque)
    {
        $this->marque = $marque;
    }

    public function getMarque(): string{
        return "{$this->marque} \n ";
    }

    public function getVitesse(): int{
        return $this->vitesse;
    }

    public function setVitesse(int $vitesse): void {
        if($vitesse < 0 ){
            $vitesse = 0;
        }
        $this->vitesse = $vitesse;
    }

}

$V = new Voiture2(marque:"toyota");
echo $V->marque;

echo $V->setVitesse(50)."\n";
echo $V->getVitesse()."\n";
echo $V->setVitesse(-50)."\n";
echo $V->getVitesse()."\n";