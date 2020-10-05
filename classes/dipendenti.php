<?php

class Dipendente {

    protected $nome;
    protected $cognome;
    protected $eta;
    private $sesso;

    
    public function __construct($_nome,$_cognome,$_eta,$_sesso = 'non definito') {

        if (empty($_nome)) {
            die('nome non inserito');
        }

        if (empty($_cognome)) {
            die('cognome non inserito');
        }

        if (empty($_eta)) {
            die('età non inserita');
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
            die('nome non valido');
        }
        return $this->nome = $_nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function setCognome($_cognome) {
        if (is_numeric($_cognome)) {
            die('cognome non valido');
        }
        return $this->cognome = $_cognome;
    }

    public function getSesso() {
        return $this->sesso;
    }

    public function setSesso($_sesso) {
        if (is_numeric($_sesso)) {
            die('sesso non valido');
        }
        return $this->sesso = $_sesso;
    }

    

}