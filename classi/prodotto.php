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

    //metodi
    function ritornaProdotto($idProdotto)
    {
        if( $this->$nomeProdotto == $this->arrayProdotti[0])
        {
            return new Cuccia($idProdotto);
        }
    }
}
?>