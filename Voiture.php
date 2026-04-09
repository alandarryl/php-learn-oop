
<?php


class Voiture 
{
    public string $marque;
    public int $vitesse = 0;

    public function demarrer(): string {
        return "la voiture demarre";
    }

    protected function accelerer(int $kmh): string{
        $this->vitesse += $kmh;
        return "Acceleration {$this->vitesse}";
    }

    private function afficherInfo(): string{
        return "marque: {$this->marque}, vitesse: {$this->vitesse} ";
    }

    public function fiche(): string{
        return $this->afficherInfo();
    }

}

// $v = new Voiture();

// $v->marque = "Peugeot";

// echo $v->fiche();

// echo $v->demarrer();

