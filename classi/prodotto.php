<?php
class Prodotto{
    private $id ;
    public $nomeAzienda = "ArcaPlanet";
    public $sedeAzienda = "Milano";
    private $arrayProdotti = ['cuccia','gioco','cibo'];
    private $nomeProdotto;
    private $idProdotto;
    
    //costruttore
    function __construct($nomeProdotto,$idProdotto)
    {
        $this->$nomeProdotto = $nomeProdotto;
        $this->$idProdotto = $idProdotto;
    }

    for($i = 0; $i < count($this->arrayProdotti); $i++)
    {
        if($this->nomeProdotto === $this->arrayProdotti[0])
        {
            return  new Cuccia($this->idProdotto);
        }
    }
}
?>