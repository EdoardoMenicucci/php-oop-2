<?php

class Cuccia extends Generico
{
    //FUNZIONE PER SPECIFICARE LE VARIABILI TRA LE () DELL'OGGETTO/CLASSE'
    public function __construct(public $nome, public $descrizione, public Categoria $categoria, public $tipoDiCuccie, public $prezzo)
    {
    }

    // Funzione per stampare in pagina tutti i dati

    public function stampaTutto()
    {
        echo "<li> Il Prodotto: " . $this->nome . "</li>";
        echo "<li> La Descrizione: " . $this->descrizione . "</li>";
        echo "<li>  " . $this->categoria->descrizione . "</li>";
        echo "<li> La cuccia e': " . $this->tipoDiCuccie . "</li>";
        echo "<li> Prezzo: " . $this->prezzo . "</li>";
        echo "<li> Il prodotto e' una " . get_class($this) . "</li>";
    }
}
