<?php 

class Caracteristiques{
    protected int $nbPneus;
    protected int $nbPortes;

    public function __construct(int $nbPneus, int $nbPortes)
    {
        $this->nbPortes = $nbPortes;
        $this->nbPneus = $nbPneus;
    }

    public function getNbPneus(): int {
        return $this->nbPneus;
    }

    public function getNbPortes(): int {
        return $this->nbPortes;
    }

    public function descriptionRouesEtPortes(): string{
        return "Pneus: {$this->nbPneus}, Portes: {$this->nbPortes} ";
    }

}

class Voiture extends Caracteristiques {
    private string $marque;

    public function __construct(string $marque, int $nbPortes)
    {
        parent::__construct(4, $nbPortes);
        $this->marque = $marque;
    }

    public function presentation(): string {
        return "{$this->marque} - Pneus : {$this->nbPneus}, Portes : {$this->nbPortes} ";
    }

}

$v = new Voiture($marque = "peugeo", $nbPortes = 5);

// echo $v->descriptionRouesEtPortes();
echo $v->presentation();