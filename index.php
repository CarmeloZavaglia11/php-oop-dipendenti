<!-- Crea e modella classi, a piacere, per gestire i dipendenti di un’azienda.
Aggiungete 1 trait a piacere -->

<?php

include_once __DIR__.'/classes/dipendenti.php';
include_once __DIR__.'/classes/fiscale.php';

try {
    $dipendente1 = new Dipendente('Mario','Rossi',32,'maschio');
    $dipendente1->setSesso('maschio');
    echo $dipendente1;
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}


try {
    $fiscDipendente1 = new DipendenteFiscale('Carmelo','Zavaglia',32,'ZVGCML99P12G791F','Capo Sezione Amministrativa');
    $fiscDipendente1->typeContract('Determinato');
    $fiscDipendente1->setMensileLordo(1500);
    $fiscDipendente1->setStraordinari(400);
    echo $fiscDipendente1;
    echo($fiscDipendente1->calcAnnualeNetto());
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}















?>