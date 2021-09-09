<?php

/*
    On ne respect pas le "Open/Close" de Solid, si on ajoute une classe Circle on doit recoder la class Area.
    La formule de caclul de l'air devrait appartenir au objet de forme.

    "Liskov substitution"
    Créer une Interface qui aura dans son contrat une methode de calcul de l'aire.
    Créer les class qui implémente l'Interface.

    Modifier la Méthode "sum" pour quelle appel la methode des class.

*/

require_once __DIR__ . '/vendor/autoload.php';

Interface Forme
{
    public function aire(): float;
}

class Rectangle implements Forme {
    public function __construct(
        private float $w, 
        private float $h
    ) {}

    public function aire(): float
    {
        return $this->w * $this->h;
    }
}

class Square implements Forme {
  
    public function __construct(private float $c) {
    }

    public function aire(): float
    {
        return $this->c**2;
    }
}

class Area {
    public function __construct(
        private array $shapes = []
    ) {}
    
    public function sum() {
        foreach($this->shapes as $shape) {
            $area[] = $shape->aire;
        }
        return array_sum($area);
    }

    public function setForme(Forme $forme)
    {
        $this->shapes[] = $forme;
    }
}
