<?php

interface Mouvement
{
    public function deplacement(): string;
}

class Bateau implements Mouvement
{
    public function deplacement(): string
    {
        return "Le bateau navigue";
    }
}

class Avion implements Mouvement
{
    public function deplacement(): string
    {
        return "L'avion vole";
    }
}

$mouvements = [new Bateau(), new Avion()];

foreach ($mouvements as $key => $m) {
    echo $m->deplacement()."\n";
}

