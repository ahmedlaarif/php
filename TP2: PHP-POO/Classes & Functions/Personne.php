<?php

class Personne {
    private $nom;
    private $prenom;
    private $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function presenter() {
        return "Je m'appelle {$this->prenom} {$this->nom}.";
    }

    public function age() {
        $dateNaissance = new DateTime($this->dateNaissance);
        $aujourdHui = new DateTime('now');
        $difference = $aujourdHui->diff($dateNaissance);

        return $difference->y;
    }

    public function decrirePersonne() {
        return $this->presenter() . " J'ai {$this->age()} ans.";
    }
}

$personne1 = new Personne("John", "Smith", "1965-09-10");
$personne2 = new Personne("Alexander", "Graham Bell", "1847-03-03");

echo $personne1->decrirePersonne() . PHP_EOL;
echo $personne2->decrirePersonne() . PHP_EOL;
?>

