<?php

class Dipendente {

    protected $nome;
    protected $cognome;
    protected $eta;
    private $sesso;

    
    public function __construct($_nome,$_cognome,$_eta,$_sesso = 'non definito') {

        if (empty($_nome)) {
            throw new Exception('nome non inserito');
        }

        if (empty($_cognome)) {
            throw new Exception('cognome non inserito');
        }

        if (empty($_eta)) {
            throw new Exception('età non inserita');
        }

        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
        $this->sesso = $_sesso;


    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($_nome) {
        if (is_numeric($_nome)) {
            throw new Exception('nome non valido');
        }
        return $this->nome = $_nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function setCognome($_cognome) {
        if (is_numeric($_cognome)) {
            throw new Exception('cognome non valido');
        }
        return $this->cognome = $_cognome;
    }

    public function getSesso() {
        return $this->sesso;
    }

    public function setSesso($_sesso) {
        if (is_numeric($_sesso)) {
            throw new Exception('sesso non valido');
        }
        return $this->sesso = $_sesso;
    }

    public function __toString() {
        return "<br> Nome: ".$this->nome."<br> Cognome: ".$this->cognome."<br> età: ".$this->eta."<br> sesso: ".$this->sesso."<br>";
    }

    

}