<?php


// CREO LA CLASSE (OGGETTO),
class Generico
{
    //FUNZIONE PER SPECIFICARE LE VARIABILI TRA LE () DELL'OGGETTO/CLASSE'
    public function __construct(public $nome, public $descrizione, public Categoria $categoria, public $prezzo)
    {
    }

    // Funzione per stampare in pagina tutti i dati

    public function stampaTutto()
    {
        echo "<li> Il Prodotto: " . $this->nome . "</li>";
        echo "<li> La Descrizione: " . $this->descrizione . "</li>";
        echo "<li> " . $this->categoria->descrizione . "</li>";
        echo "<li> Prezzo: " . $this->prezzo . "</li>";
        //Estraggo la classe, utilizzando $this per riferirmi all'elemento stesso 
        echo "<li> Il prodotto e' " . get_class($this) . "</li>";
    }
}
