<?php

class TraitBonjour{
    public function Bonjour(){
        echo 'Bonjour';
    }
}

trait LeMonde {

    public function Bonjour(){
        parent::Bonjour();
        echo " le monde";
    }
}

class Mot extends TraitBonjour{
    use LeMonde;
}

$mot = new Mot();
$mot->Bonjour();