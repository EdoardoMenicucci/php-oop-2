<?php

class Cibo extends Product
{
    //FUNZIONE PER SPECIFICARE LE VARIABILI TRA LE () DELL'OGGETTO/CLASSE'
    public function __construct(public $nome, public $descrizione, public Categoria $categoria, public $tipoDiCibo, public $taglia, public $prezzo)
    {
    }

    // Funzione per stampare in pagina tutti i dati

    public function stampaTutto()
    {
        echo "<li> Il Prodotto: " . $this->nome . "</li>";
        echo "<li> La Descrizione: " . $this->descrizione . "</li>";
        echo "<li> " . $this->categoria->descrizione . "</li>";
        echo "<li> Tipo di cibo: " . $this->tipoDiCibo . "</li>";
        echo "<li> Taglia dell'animale: " . $this->taglia . "</li>";
        echo "<li> Prezzo: " . $this->prezzo . "</li>";
    }
}
