<?php


// CREO LA CLASSE (OGGETTO),
class Cliente
{
    //creo il carrello
    public $carrello = [];
    //FUNZIONE PER SPECIFICARE LE VARIABILI TRA LE () DELL'OGGETTO/CLASSE'
    public function __construct(public $nomeCompleto)
    {
    }

    public function addToCart($prodotto)
    {
        $this->carrello[] = $prodotto;
    }








    // Funzione per stampare in pagina tutti i dati

    //public function stampaTutto()
    // {
    //echo "<li> Il Nome: " . $this->nomeCompleto . "</li>";
    //echo "<li> La Cognome: " . $this->cognome . "</li>";
    //echo "<li> " . $this->categoria->descrizione . "</li>";
    //echo "<li> Prezzo: " . $this->prezzo . "</li>";
    //Estraggo la classe, utilizzando $this per riferirmi all'elemento stesso 
    //echo "<li> Il prodotto e' " . get_class($this) . "</li>";
    //}
}
