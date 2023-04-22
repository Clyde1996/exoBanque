<?php

class CompteBancaire {

    //atributs

    private string $libelle;
    private float $solde;
    private string $devise; // symbol(s) EUR USD
    private Titulaire $titulaire;


    //constructor
    public function __construct(string $libelle, float $solde,  string $devise, Titulaire $titulaire){

        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        
        $this->titulaire = $titulaire;
        $titulaire->ajouterCompte($this);
    }
    //methodes

    //getters/setters

    public function getLibelle()
    {
        return $this->libelle;
    }

 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getSolde()
    {
        return $this->solde;
    }
 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDevise()
    {
        return $this->devise;
    }

    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    public function getTitulaire()
    {
        return $this->titulaire;
    }

    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;
        return $this;
    }


    public function crediter($montant) {
        $this->solde += $montant;
        // $this->solde = $this->solde + $montant;
    }
    public function debiter($montant) {
        $this->solde -= $montant;
    }

    public function virement(float $montant, CompteBancaire $compteCible){
        $this->debiter($montant);
        $compteCible->crediter($montant);
    }

    public function getInfos() {
        $result = "<h2>Information du compte</h2>";
        $result .= $this -> libelle;
        $result .= $this -> solde;
        $result .= $this -> devise;

        return $result. " : ";
    }

    public function __tostring(){

    return $this->libelle .
    $this->solde .
    $this->devise;      
    }

    public function getInfosGenerale(){
        return 
                $this->libelle .
               $this->solde .
               $this->devise .
               ' : '. 
               $this->getTitulaire() ; 
    }
 
    // public function __tostring(){
    //     return "Le Compte" . $this->libelle . "de" . $this->nom . $this->prenom. "a" . $solde . $libelle;
    // }
    
}







?>