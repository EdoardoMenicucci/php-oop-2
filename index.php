<?php
include_once __DIR__ . '/data.php';


//ESEMPIO DI $_SESSION PER IL CARRELLO
session_start(); // Avvia la sessione

//SVUOTO IL CARRELLO SE RICEVO IL POST DAL FORM 
if (isset($_POST['svuotaCarrello'])) {
    $_SESSION['carrelloUser'] = [];
}

//Provo a utilizzare session
if (!isset($_SESSION['carrelloUser'])) {
    $_SESSION['carrelloUser'] = []; // Inizializza il carrello nella sessione se non esiste
}

$carrelloUser = $_SESSION['carrelloUser'];

if (isset($_POST['indexProdotto'])) {
    // Recupero il valore inviato dal form
    $indexProdotto = $_POST['indexProdotto'];
    $carrelloUser[] = $prodotti[$indexProdotto];
    $_SESSION['carrelloUser'] = $carrelloUser; // Salva il carrello aggiornato nella sessione
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 2</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php foreach ($prodotti as $index => $prodotto) { ?>
        <ul>
            <?php
            echo $prodotto->stampaTutto();
            ?>
        </ul>
        <form action="" method="POST">
            <button type="submit" value="<?php echo $index ?>" name="indexProdotto">Aggiungi al carrello</button>
        </form>
        <hr>

    <?php } ?>
    <!-- Stampo il carrello -->
    <h3>Carrello:</h3>
    <?php foreach ($carrelloUser as $key => $value) {
        echo $value->nome . '; ' . 'Prezzo: ' . $value->prezzo . '<br>';
    }
    ?>
    <form action="" method="POST">
        <button type="submit" value="" name="svuotaCarrello">Svuota carrello</button>
    </form>

</body>

</html>