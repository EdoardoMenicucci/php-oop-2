<?php
include_once __DIR__ . '/data.php';

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
    <?php foreach ($prodotti as $prodotto) { ?>
        <ul>
            <?php
            echo $prodotto->stampaTutto();
            ?>
        </ul>
        <hr>
    <?php } ?>

</body>

</html>