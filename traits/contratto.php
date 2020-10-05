<?php


    trait Contratto {

        private $contratto;

        public function typeContract($_contratto) {

            if (empty($_contratto)) {
                die('Nessun tipo di contratto');
            }

            if (is_numeric($_contratto)) {
                die('Contratto non valido');
            }

            return $this->contratto = $_contratto;

        }

    }