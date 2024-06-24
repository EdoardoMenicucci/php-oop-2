<?php

class Cuccia extends Product
{
    //FUNZIONE PER SPECIFICARE LE VARIABILI TRA LE () DELL'OGGETTO/CLASSE'
    public function __construct(public $nome, public $descrizione, public $categoria, public $tipoDiCuccie, public $prezzo)
    {
    }

    // Funzione per stampare in pagina tutti i dati

    public function stampaTutto()
    {
        echo "<li> Il Prodotto: " . $this->nome . "</li>";
        echo "<li> La Descrizione: " . $this->descrizione . "</li>";
        echo "<li> Per: " . $this->categoria . "</li>";
        echo "<li> La cuccia e': " . $this->tipoDiCuccie . "</li>";
        echo "<li> Prezzo: " . $this->prezzo . "</li>";
    }
}
