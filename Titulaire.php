<?php
class Titulaire{
    private string$_nom;
    private string$_prenom;
    private string$_date;
    private string$_ville;
    private array $_compte;

    function __construct(string $nom,string $prenom, string $date, string $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_date = $date;
        $this->_ville = $ville;
        $this->_compte = [];
    }
    public function addCompte($compte){
        $this->_compte[] = $compte;
    }
    public function getNom():string {
        return $this->_nom;
    }
    public function setNom(string $nom){
        return $this->_nom = $nom;
    }
    public function getPrenom():string {
        return $this->_prenom;
    }
    public function setPrenom(string $prenom) {
        return $this->_prenom = $prenom;
    }
    public function getDate():string { 
        return $this->_date;
    }
    public function setDate(string $date) {
        return $this->_date = $date;
    }
    public function getVille():string { 
        return $this->_ville;
    }
    public function setVille(String $ville) {
        return $this->_ville = $ville;
    }
}
?>