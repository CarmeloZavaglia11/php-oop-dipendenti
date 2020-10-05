<!-- Crea e modella classi, a piacere, per gestire i dipendenti di un’azienda.
Aggiungete 1 trait a piacere -->

<?php

include_once __DIR__.'/classes/dipendenti.php';
include_once __DIR__.'/classes/fiscale.php';


$dipendente1 = new Dipendente('Mario','Rossi',32,'maschio');

$dipendente1->setSesso('maschio');

var_dump($dipendente1);

$fiscDipendente1 = new DipendenteFiscale('Carmelo','Zavaglia',32,'ZVGCML99P12G791F','Capo Sezione Amministrativa',);

$fiscDipendente1->typeContract('Determinato');

$fiscDipendente1->setMensileLordo(1500);

$fiscDipendente1->setStraordinari(400);

var_dump($fiscDipendente1);

echo($fiscDipendente1->calcAnnualeNetto());

?>