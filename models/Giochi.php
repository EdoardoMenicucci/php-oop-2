<?php

class Gioco extends Generico
{
    //FUNZIONE PER SPECIFICARE LE VARIABILI TRA LE () DELL'OGGETTO/CLASSE'
    public function __construct(public $nome, public $descrizione, public Categoria $categoria, public $tipoDiGioco, public $prezzo)
    {
    }

    // Funzione per stampare in pagina tutti i dati

    public function stampaTutto()
    {
        echo "<li> Il Prodotto: " . $this->nome . "</li>";
        echo "<li> La Descrizione: " . $this->descrizione . "</li>";
        echo "<li> " . $this->categoria->descrizione . "</li>";
        echo "<li> Tipologia di Gioco: " . $this->tipoDiGioco . "</li>";
        echo "<li> Prezzo: " . $this->prezzo . "</li>";
        echo "<li> Il prodotto e' un " . get_class($this) . "</li>";
    }
}
