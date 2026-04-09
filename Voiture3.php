
<?php

class Voiture3{
    private string $marque;

    private static int $nbVoitures = 0;

    public const NB_PORTES = 5;

    public function __construct(string $marque)
    {
        $this->$marque = $marque;
        self::$nbVoitures++;
    }

    public static function getNbVoiture(): int{
        return self::$nbVoitures;
    }
}

$v1 = new Voiture3("peugeo");
$v2 = new Voiture3("tesla");
$v3 = new Voiture3("tesla");


echo Voiture3::NB_PORTES."\n";

echo Voiture3::getNbVoiture();

