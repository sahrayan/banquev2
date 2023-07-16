<?php

class Compte{
    private string $_libelle;
    private int $_solde;
    private string $_devise;
    private Titulaire $_titulaire;

    function __construct(string $libelle, int $solde, string $devise, Titulaire $titulaire){
    $this->_libelle = $libelle;
    $this->_solde = $solde;
    $this->_devise = $devise;
    $this->_titulaire = $titulaire;
    $this->_titulaire->addCompte($this);
    }

    public function getLibelle():string {
        return $this->_libelle;
    }
    public function setLibelle(string $libelle){
        return $this->_libelle= $libelle;
    }

    public function getSolde():int {
        return $this->_solde;
    }
    public function setSolde(int $solde){
        return $this->_solde = $solde;
    }


    public function getDevise():string {
        return $this->_nom;
    }
    public function setDevise(string $devise){
        return $this->_devise = $devise;
    }


    public function getTitulaire():Titulaire {
        return $this->_titulaire;
    }
    public function setTitulaire(Titulaire $titulaire){
        return $this->_titulaire = $titulaire;
    }

    public function __toString(){
        return $this->getSolde() .$this->getDevise() .$this->getTitulaire() ."<br>";
    }
}
?>