<?php
//phpinfo;
include 'classi/prodotto.php';
//$utente = new Utente('silvio','antonioli');

$cuccia = new Prodotto('cuccia','1za');

echo("<p>Il prodotto scelto ha la seguente descrizione: $cuccia->descrizione </p>");

//$disponibilit√† = $cuccia->disponibilita();
//controllo che il prodotto sia disponibile
/*
if($disponibilit√†)
{
    echo('Il prodotto √® disponibile all\'acquisto');
}else{
    echo('Il prodotto non √® disponibile all\'acquisto');
}

//$utente->compraProdotto('12');
*/
?>