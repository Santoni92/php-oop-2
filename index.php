<?php
//phpinfo;
include 'classi/prodotto.php';
//$utente = new Utente('silvio','antonioli');

$cuccia = new Prodotto('cuccia','1za');

echo("<p>Il prodotto scelto ha la seguente descrizione: $cuccia->descrizione </p>");

//$disponibilità = $cuccia->disponibilita();
//controllo che il prodotto sia disponibile
/*
if($disponibilità)
{
    echo('Il prodotto è disponibile all\'acquisto');
}else{
    echo('Il prodotto non è disponibile all\'acquisto');
}

//$utente->compraProdotto('12');
*/
?>