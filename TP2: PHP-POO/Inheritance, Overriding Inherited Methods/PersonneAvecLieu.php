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

class PersonneAvecLieu extends Personne {
    private $lieuNaissance;

    public function __construct($nom, $prenom, $dateNaissance, $lieuNaissance) {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->lieuNaissance = $lieuNaissance;
    }

    public function decrirePersonne() {
        return parent::decrirePersonne() . " Je suis né(e) à {$this->lieuNaissance}.";
    }
}

$personne2 = new Personne("Alexander", "Graham Bell", "1847-03-03", "Edinburgh, United Kingdom");
$personne2 = new Personne("Smith", "John", "1985-10-20");

echo $personne1->decrirePersonne() . PHP_EOL;
echo $personne2->decrirePersonne() . PHP_EOL;
?>

