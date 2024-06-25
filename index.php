<?php
include_once __DIR__ . '/data.php';


if (isset($_POST['indexProdotto'])) {
    // Recupero il valore inviato dal form
    $indexProdotto = $_POST['indexProdotto'];
    $user1->carrello[] = $prodotti[$indexProdotto];
    echo '<pre>' . $user1->carrello . '</pre>';
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

</body>

</html>