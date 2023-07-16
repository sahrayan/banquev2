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
        return $this->_devise;
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

    public function Crediter($montant){
        $this->_solde += $montant;
        echo "Vous venez de crediter de ".$montant." euro <br>";
    }
    public function Debiter($montant){
        $this->_solde -= $montant;
        echo "Vous venez de debiter de ".$montant." euro <br>";
    }
    public function virementVersCompte(Compte $compteDestination, int $montant) {
        if ($this->_solde >= $montant) {
            $this->Debiter($montant);
            $compteDestination->Crediter($montant);
            echo "Virement de {$montant} {$this->_devise} effectué avec succès vers le compte de {$compteDestination->getTitulaire()->getPrenom()} {$compteDestination->getTitulaire()->getNom()}" . PHP_EOL;
        } else {
            echo "Solde insuffisant pour effectuer le virement." . PHP_EOL;
        }
    }
    public function BanqueInfo(){
        echo "445463715442****<br>".$this->_libelle."<br>".$this->_solde." ".$this->_devise."<br>";
    }
}
?>