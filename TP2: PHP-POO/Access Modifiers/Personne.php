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

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }
}

class Etudiant extends Personne {
    private $identifiant;

    public function __construct($nom, $prenom, $dateNaissance, $identifiant) {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->identifiant = $identifiant;
    }

    public function getIdentifiant() {
        return $this->identifiant;
    }

    public function setIdentifiant($identifiant) {
        $this->identifiant = $identifiant;
    }

    public function estBoursier() {
        $age = $this->age();
        return ($age > 18 && $age < 23);
    }

    public function afficherEtudiant() {
        $boursier = $this->estBoursier() ? "Oui" : "Non";
        return $this->decrirePersonne() . " Mon identifiant est {$this->identifiant}. Boursier : {$boursier}.";
    }
}

$etudiant1 = new Etudiant("Abraham", "Lincoln", "1809-02-12", "E123456");
$etudiant2 = new Etudiant("John", "Smith", "1990-08-10", "E789012");

echo $etudiant1->afficherEtudiant() . PHP_EOL;
echo $etudiant2->afficherEtudiant() . PHP_EOL;
?>

