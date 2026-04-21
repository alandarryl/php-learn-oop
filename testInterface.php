
<?php

interface Chargeur
{
    public function donnerEnergie();
}

class ChargeurPhysique implements Chargeur
{
    public function donnerEnergie(){
        return "je donne 220v de la prise murale";
    }
}

class ChargeurSolaire implements Chargeur
{
    public function donnerEnergie(){
        return "je transforme les rayons du soleil";
    }
}

class Mobile
{
    public int $energy;
    public string $phoneModel;

    public function recharger(Chargeur $monChargeur){
        echo $monChargeur ->donnerEnergie();
        $this ->energy = 100;
        echo " Batterie recharger";
    }

}

$monTelephone = new Mobile();

$chargeMurale = new ChargeurPhysique();
$chargeSolaire = new ChargeurSolaire();

$monTelephone->recharger($chargeMurale);

echo "\n";

$monTelephone->recharger($chargeSolaire);



