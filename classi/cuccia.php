<?php
class Cuccia extends Prodotto{
    //variabili d'istanza
    private $arrayId = ['1za','2xs'];
    private $idProdotto;
    private $descrizione;
    private $materiale;
    private $struttura;

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
                    $this->materiale = "plastica";
                    $this->$struttura = "tetto apribile";
                }
            }
        }
    }

    //metodi pubblici
    function getDescrizione()
    {
        echo("Descrizione del Prodotto: $this->descrizione");
    }

    function getMateriale()
    {
        echo("La cuccia è fatta in $this->materiale");
    }

    function getStruttura()
    {
        echo("La cuccia selezionata h la seguente struttura: $this->struttura");
    }

}
?>