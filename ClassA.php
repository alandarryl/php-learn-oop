<?php

class A
{
    public function calcul(){
        return 10;
    }
}

class B extends A
{
    public function calcul()
    {
        $nb = parent::calcul();

        if($nb <= 100){
            return "{$nb} est infereieur ou égale a 100";
        }else{
            return "{$nb} est superieur a 100";
        }
    }

    public function autrecalcul(): void{
        parent::calcul();
    }

}

$objetB = new B();

echo $objetB->calcul();
