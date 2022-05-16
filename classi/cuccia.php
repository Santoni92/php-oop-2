<?php
//variabili d'istanza
private $descrizione;
private $materiale;
private $struttura;
private $arrayId = ['1za','2xs'];
private $idProdotto;

//costruttore
function __construct($id);
{
    foreach($this->arrayId as $id)
    {
        if(in_array($id,$this->arrayId))
        {
            $this->idProdotto = $id;
            if($this->idProdotto == $arrayId[0])
            {
                $this->descrizione = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum, augue ut accumsan euismod, odio.";
                $this->materiale = "legno";
                $this->$struttura = "tetto spiovente";
            }elseif($this->idProdotto == $arrayId[1])
            {
                $this->descrizione = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed. ";
                $this->materiale = "platica";
                $this->$struttura = "tetto apribile";
            }
        }
    }
}

//metodi pubblici
function getDimensioni()
{

}
?>