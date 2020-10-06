<?php


    trait Contratto {

        private $contratto;

        public function typeContract($_contratto) {

            if (empty($_contratto)) {
                throw new Exception('Nessun tipo di contratto');
            }

            if (is_numeric($_contratto)) {
                throw new Exception('contratto non valido');
            }

            return $this->contratto = $_contratto;

        }

    }