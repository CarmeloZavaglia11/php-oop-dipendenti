<?php

include_once __DIR__.'/../traits/contratto.php';

    class DipendenteFiscale extends Dipendente {

        private $cod_fisc;
        private $mansione;
        private $mensile_lordo;
        private $straordinari;

        use Contratto;

        public function __construct($_nome,$_cognome,$_eta,$_cod_fisc,$_mansione,$_mensile_lordo = 0,$_straordinari = 0) {

            if (empty($_nome)) {
                die('nome non inserito');
            }
    
            if (empty($_cognome)) {
                die('cognome non inserito');
            }
    
            if (empty($_eta)) {
                die('età non inserita');
            }

            if (strlen($_cod_fisc) <> 16) {
                die('Codice Fiscale errato');
            }

            if (empty($_mansione)) {
                die('mansione non inserita');
            }



            parent::__construct($_nome,$_cognome,$_eta);

            $this->cod_fisc = $_cod_fisc;
            $this->mansione = $_mansione;
            $this->mensile_lordo = $_mensile_lordo;
            $this->straordinari = $_straordinari;



        }

        public function getCodFisc() {
            return $this->cod_fisc;
        } 

        public function setCodFisc($_cod) {

            if (strlen($_cod) <> 16) {
                die('Codice Fiscale errato');
            }

            if (is_numeric($_cod)) {
                die('Codice Fiscale soltanto numerico non valido');
            }

            return $this->cod_fisc = $_cod;
        } 

        
        public function getMansione() {
            return $this->mansione;
        } 

        public function setMansione($_mansione) {

            if (is_numeric($_mansione)) {
                die('mansione non valida');
            }

            return $this->mansione = $_mansione;
        } 

        
        public function getMensileLordo() {
            return $this->mensile_lordo;
        } 

        public function setMensileLordo($_mensile) {

            if (is_string($_mensile)) {
                die('mensile non valido');
            }

            return $this->mensile_lordo = $_mensile;
        } 

        
        public function getStraordinari() {
            return $this->straordinari;
        } 

        public function setStraordinari($_straordinari) {

            if (is_string($_straordinari)) {
                die('straordinario non valido');
            }

            return $this->straordinari = $_straordinari;
        } 

        public function calcAnnualeNetto() {

            $mensile_lordo = $this->mensile_lordo;

            return "Annuale Netto: ".($mensile_lordo - $mensile_lordo / 4) * 12 ." €" ;

        }


    }